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
                  <th>职介</th>
                  <th>姓名</th>
                  <th>性别</th>
                  <th>属性</th>
                  <th>地区</th>
                  <th>出处</th>
                  <th>ATK</th>
                  <th>HP</th>
                  <th>操作</th>
                </thead>
                {{-- 遍历数据到视图 --}}
                @foreach($data as $v)
                    <tr>
                      <td>{{ $v->id }}</td>
                      <td>{{ $v->rank }}</td>
                      <td>{{ $v->name }}</td>
                      <td>{{ $v->sex }}</td>
                      <td>{{ $v->attribute }}</td>
                      <td>{{ $v->region }}</td>
                      <td>{{ $v->source }}</td>
                      <td>{{ $v->ATK }}</td>
                      <td>{{ $v->HP }}</td>
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