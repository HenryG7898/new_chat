<div>
    <div class="w-screen">
        <div class="grid grid-cols-3 min-w-full border rounded">
            <div class="col-span-1 bg-white border-r border-gray-300">
                <div class="my-3 mx-3 ">
                    <div class="relative text-gray-600 focus-within:text-gray-400">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 text-gray-500"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </span>
                        <input aria-placeholder="Busca tus amigos o contacta nuevos" placeholder="Busca tus amigos"
                               class="py-2 pl-10 block w-full rounded bg-gray-100 outline-none focus:text-gray-700" type="search" name="search" required autocomplete="search" />
                    </div>
                </div>

                <ul class="overflow-auto" style="height: 500px;">
                    <h2 class="ml-2 mb-2 font-bold text-gray-600 text-lg my-2">Chats</h2>

                    <li>
                        @foreach($users as $user)
                            @if ($user->id != auth()->user()->id)


                            @php
                                $not_seen= App\Models\messages::where('user_id',$user->id)->
                                where('receiver_id',auth()->id())->where('is_seen',false)->get() ?? null
                            @endphp
                            <a wire:click="getUser({{$user->id}})" class="hover:bg-gray-100 border-b border-gray-300 px-3 py-2 flex items-center text-sm focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">

                                <img class="h-10 w-10 rounded-full object-cover"
                                 src="{{$user->profile_img}}"
                                 alt="username" />

                            <div class="w-full pb-2">
                                <div class="flex justify-between">
                                    <span class="block ml-2 font-semibold text-base text-gray-600 ">{{$user->first_nm." ".$user->last_nm}}
                                        @if($user->is_online == true)
                                            <span class="connected text-green-500 ml-2" >
                            <svg width="6" height="6">
                                <circle cx="3" cy="3" r="3" fill="currentColor" color="green"></circle>
                                    @endif</span>
                                    @if(filled($not_seen))
                                    <span class="block ml-2 text-sm text-gray-600">{{$not_seen->count()}}</span>
                                        @endif
                                </div>
{{--                                @foreach ($lastest as $item)--}}
{{--                                    @if ($item->id == $item->user_id)--}}
                                        <span class="block ml-2 text-sm text-gray-600">Hello World!</span>
{{--                                    @endif--}}

{{--                                @endforeach--}}

                            </div>
                        </a>
                            @endif
                        @endforeach
                    </li>

                </ul>
            </div>
            <div class="col-span-2 bg-white">
                <div class="w-full">
                    <div class="flex items-center border-b border-gray-300 pl-3 py-3">
                        @if (isset($sender))
                        <img class="h-10 w-10 rounded-full object-cover"
                             src="{{$sender->profile_img}}"
                             alt="username" />
                        <span class="block ml-2 font-bold text-base text-gray-600">

                                {{$sender->first_nm.' '.$sender->last_nm}}
                            </span>
                            @else
                            <span class="block ml-2 font-bold text-base text-gray-600">

                                Choose a name
                            </span>
                            @endif



                        <span class="connected text-green-500 ml-2" >
                            <svg width="6" height="6">
                                <circle cx="3" cy="3" r="3" fill="currentColor"></circle>
                            </svg>
                        </span>
                    </div>
                    <div id="chat" wire:poll="mountdata" class="w-full overflow-y-auto p-5 relative" style="height: 490px;" ref="toolbarChat">
                        <ul>
                            <li class="">
                                @if(filled($allmessages))
                                    @foreach($allmessages as $mgs)
                                        <div class="w-full flex  single-message @if($mgs->user_id == auth()->id()) sent @else received @endif">
                                            <div class="bg-gray-100 rounded px-5 py-2 my-2 text-gray-700 relative" style="max-width: 300px;">
{{--                                                <span class="block">{{$mgs->user->first_nm}}</span>--}}
                                                <span class="">{{$mgs->message}}</span>
                                                <span class="block text-xs mt-1 text-right">{{$mgs->created_at}}</span>
                                            </div>
                                        </div>

{{--                                        <div class="single-message @if($mgs->user_id == auth()->id()) sent @else received @endif">--}}
{{--                                            <p class="block font-weight-bolder my-0">{{$mgs->user->first_nm}}</p>--}}
{{--                                            {{$mgs->message}}--}}
{{--                                            <br><small class="text-muted w-100">Sent <em>--}}
{{--                                                    {{$mgs->created_at}}</em></small>--}}
{{--                                        </div>--}}
                                    @endforeach
                                @endif


                            </li>
                        </ul>
                    </div>

                    <div class="w-full py-3 px-3 border-t border-gray-300">

                        <form wire:submit.prevent="SendMessage" class="flex ">
                        <input wire:model="message" placeholder="Message"
                               class="w-11/12 py-2 px-2 rounded-lg bg-gray-100 outline-none focus:text-gray-700" type="text" />

                        <button class="outline-none focus:outline-none" type="submit">
                            <svg class="text-blue-700 h-7 w-7 ml-3 origin-center transform rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                            </svg>
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
