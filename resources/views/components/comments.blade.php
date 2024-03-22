<div class="mt-5">
    <h2 class="text-3xl">Comments</h2>

    <form action="/blogs/{{$blog->id}}/comments/store" method="POST">
        @csrf
        <textarea
            name="body"
            class="w-full rounded-lg mt-3 h-32 resize-none text-black p-2"
        ></textarea>
        @error('body')
            <p class="text-xs text-red-500">{{$message}}</p>
        @enderror
        <button
            type="submit"
            class="bg-lightblue1 text-white px-3 py-1 rounded-md mt-2">
            Comment
        </button>
    </form>
    @php
        $comments = $blog->comments()->with('user')->latest()->paginate(5);
    @endphp
    @foreach ($comments as $comment)
    <div class="relative flex flex-col mt-6 w-full ring-1 ring-lightblue1 text-white bg-primary-background shadow-md bg-clip-border rounded-xl my-2">
        <div class="p-6">
            <h5 class="block mb-2 text-xl antialiased font-bold leading-snug tracking-normal text-blue-gray-900">
                {{$comment->user->name}} <span class="ml-3 text-xs font-light">{{$comment->created_at->diffForHumans()}}</span>
            </h5>
            <p class="block text-base antialiased font-light leading-relaxed text-inherit">
                {{$comment->body}}
            </p>
        </div>
    </div>
    @endforeach
    {{ $comments->links() }}
</div>