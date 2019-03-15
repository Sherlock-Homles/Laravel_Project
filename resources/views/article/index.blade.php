    @extends('layout')

    @section('content')

      <div class="jumbotron">
            <h2>人理継続保障機関フィニス・カルデア
                <a class="btn btn-primary btn-lg pull-right" href="add" role="button">添加文章</a>
            </h2>
      </div>
        <table class="table table-hover">
                <thead>
                  <th>ID</th>
                  <th>标题</th>
                  <th>描述</th>
                  <th>内容</th>
                  <th>添加时间</th>
                  <th>添加日期</th>
                  <th>操作</th>
                </thead>
                {{-- 遍历数据到视图 --}}
                @foreach($data as $v)
                    <tr>
                      <td>{{ $v->id }}</td>
                      <td>{{ $v->title }}</td>
                      <td>{{ $v->desn }}</td>
                      <td>{{ $v->body}}</td>
                      <td>{{ $v->ctime }}</td>
                      <td>{{ $v->dt }}</td>
                      <td>
                            <a type="button" class="btn btn-info">查看</a>
                            <a type="button" class="btn btn-warning"> 修改</a>
                            <a type="button" class="btn btn-danger"> 删除</a>
                      </td>
                    </tr>
                  @endforeach
                  {{-- 遍历end --}}
              </table>
      </div>

    @stop