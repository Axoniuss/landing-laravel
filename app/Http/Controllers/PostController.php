<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::query()
        //     ->latest('created_at')
        //     ->paginate(12);

        // return view('user.posts.index', compact('posts'));
        return ('страница список постов');
    }

    public function create()
    {
        // return view('user.posts.create');
        return ('страница создания поста');

    }

    public function store(Request $request)
    {
        // $validated = validate($request->all(), Post::$rules);

        // $post = (new Post)->fillAttributes($validated);
        // $post->user_id = User::query()->value('id');
        // $post->save();

        // alert(__('Сохранено!'));

        // return redirect()->route('user.posts.show', $post);

        return ('Запрос изменения поста');
    }

    public function show( $post)
    {
        // return view('user.posts.show', compact('post'));
        return ('страница просмотр поста');
    }

    public function edit( $post)
    {
        // return view('user.posts.edit', compact('post'));
        return ('страница изменения поста');
    }

    public function update(Request $request,  $post)
    {
        // $validated = validate($request->all(), Post::$rules);

        // $post->fillAttributes($validated)->save();

        // alert(__('Сохранено!'));

        // return back();
        return ('Запрос изменения поста');
    }

    public function delete($post)
    {
        // return redirect()->route('user.posts');
        return ('страница удаления поста');
    }
    public function like($post)
    {
        // return redirect()->route('user.posts');
        return ('страница лайка + 1');
    }
}
