<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lexmodo\V1\Blog;

/**
 */
class BlogClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lexmodo\V1\Blog\CommentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddComment(\Lexmodo\V1\Blog\CommentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.blog.Blog/AddComment',
        $argument,
        ['\Lexmodo\V1\Blog\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Blog\CommentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ApproveComment(\Lexmodo\V1\Blog\CommentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.blog.Blog/ApproveComment',
        $argument,
        ['\Lexmodo\V1\Blog\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Blog\CommentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteComment(\Lexmodo\V1\Blog\CommentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.blog.Blog/DeleteComment',
        $argument,
        ['\Lexmodo\V1\Blog\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Blog\CommentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetComment(\Lexmodo\V1\Blog\CommentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.blog.Blog/GetComment',
        $argument,
        ['\Lexmodo\V1\Blog\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Blog\BlogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddBlog(\Lexmodo\V1\Blog\BlogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.blog.Blog/AddBlog',
        $argument,
        ['\Lexmodo\V1\Blog\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Blog\BlogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateBlog(\Lexmodo\V1\Blog\BlogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.blog.Blog/UpdateBlog',
        $argument,
        ['\Lexmodo\V1\Blog\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Blog\BlogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteBlog(\Lexmodo\V1\Blog\BlogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.blog.Blog/DeleteBlog',
        $argument,
        ['\Lexmodo\V1\Blog\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Blog\BlogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetBlog(\Lexmodo\V1\Blog\BlogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.blog.Blog/GetBlog',
        $argument,
        ['\Lexmodo\V1\Blog\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Blog\BlogSearch $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BlogListing(\Lexmodo\V1\Blog\BlogSearch $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.blog.Blog/BlogListing',
        $argument,
        ['\Lexmodo\V1\Blog\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Blog\PostsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddPosts(\Lexmodo\V1\Blog\PostsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.blog.Blog/AddPosts',
        $argument,
        ['\Lexmodo\V1\Blog\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Blog\PostsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPost(\Lexmodo\V1\Blog\PostsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.blog.Blog/GetPost',
        $argument,
        ['\Lexmodo\V1\Blog\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Blog\PostSearch $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostsListing(\Lexmodo\V1\Blog\PostSearch $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.blog.Blog/PostsListing',
        $argument,
        ['\Lexmodo\V1\Blog\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Blog\PostsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdatePosts(\Lexmodo\V1\Blog\PostsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.blog.Blog/UpdatePosts',
        $argument,
        ['\Lexmodo\V1\Blog\ResultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lexmodo\V1\Blog\PostsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeletePosts(\Lexmodo\V1\Blog\PostsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lexmodo.v1.blog.Blog/DeletePosts',
        $argument,
        ['\Lexmodo\V1\Blog\ResultResponse', 'decode'],
        $metadata, $options);
    }

}
