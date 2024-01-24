<?php

namespace App\Http\Middleware;

// app/Http/Middleware/TrackArticleVisitor.php

use App\Models\Post;
use App\Models\visitor_month;
use Closure;

class TrackArticleVisitor
{
    public function handle($request, Closure $next)
    {
        $postId = 1;
        $post = Post::find($postId);

        if ($post) {
            // Update jumlah views pada tabel posts
            $post->views++;
            $post->save();

            // Simpan data pengunjung ke dalam tabel VisitorMonth
            visitor_month::create([
                'post_id' => $post->id,
                'tipe_id' => $post->tipe_id,
                'ip' => $request->ip(),
                'date' => now()->format('Y-m-d'),
            ]);
        }

        return $next($request);
    }
}
