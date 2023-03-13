<?php

namespace App\Controllers;

use App\Models\Blog;

class BlogController extends BaseController
{

    public function addBlogAction($request)
    {

        $responseMessage = null;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $postData = $request->getParsedBody();
            $blog = new Blog();
            $blog->title = $postData['title'];
            $blog->blog = $postData['blog'];
            $blog->tags = $postData['tag'];
            $blog->author = $postData['author'];
            //carga de archivos
            $files = $request->getUploadedFiles();
            $image = $files['image'];
            if ($image->getError() == UPLOAD_ERR_OK) {
                $fileName = $image->getClientFilename();
                $image->moveTo("img/$fileName");
                $blog->image = $fileName;
            }
            $blog->save();
            $responseMessage = 'Saved';
        }

        return $this->renderHTML('addBlog.twig', [
            'responseMessage' => $responseMessage
        ]);
    }

    public function showBlogsAction()
    {
        $blogs = Blog::all();
        return $this->renderHTML('index.twig', [
            'blogs' => $blogs
        ]);
    }

    public function showBlogAction($request)
    {
        $uri = explode('/', $request->getRequestTarget());
        $id = end($uri);
        $blog = Blog::find($id);
        $comments = Blog::find($id)->comments;
        return $this->renderHTML('showBlog.twig', [
            'blog' => $blog,
            'comments' => $comments
        ]);
    }

}

?>
