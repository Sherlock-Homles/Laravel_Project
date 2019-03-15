@extends('layout')

@section('content')

    <script>
        // 富文本编辑器设置
        tinymce.init({
            selector: '#mytextarea',
            // 富文本编辑器语言设置
            language_url: '/js/zh_CN.js',
            language: 'zh_CN',
            height: 400
        });
    </script>
      <div class="write">
            <form method="post" action="store">
                <div class="form-group">
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="输入文章标题">
                </div>
                <div class="form-group">
                    <input type="text" name="desn" class="form-control" id="exampleInputEmail1" placeholder="输入文章描述">
                </div>
            <!-- 富文本编辑器 -->
                <textarea id="mytextarea" name="body">输入文章内容...</textarea>
                <div class="btn">
                    <button type="submit" class="btn btn-info">发布</button>
                    <a type="button" class="btn btn-warning">保存草稿</a>
                    <a type="button" class="btn btn-danger">退出</a>
                </div>
            </form> 
      </div>

      @stop