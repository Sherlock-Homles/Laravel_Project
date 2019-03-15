@extends('layout')

@section('content')
      <div class="jumbotron">
            <h2>人理継続保障機関フィニス・カルデア
                <a class="btn btn-primary btn-lg pull-right" href="#" role="button">发布新帖</a>
            </h2>
      </div>
        <table class="table table-hover">
                <thead>
                  <th>ID</th>
                  <th>姓名</th>
                  <th>Email</th>
                  <th>密码</th>
                  <th>添加时间</th>
                  <th>最后修改时间</th>
                  <th>操作</th>
                </thead>
                {{-- 遍历数据到视图 --}}
                @foreach($data as $v)
                    <tr>
                      <td>{{ $v->id }}</td>
                      <td>{{ $v->name }}</td>
                      <td>{{ $v->email }}</td>
                      <td>{{ $v->password }}</td>
                      <td>{{ $v->created_at }}</td>
                      <td>{{ $v->updated_at }}</td>
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