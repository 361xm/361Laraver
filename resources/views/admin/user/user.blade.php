@extends("admin.base.base")
  @section('content')
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">普通用户详细信息</h3>
                  <div class="box-tools">
                    <div class="" style="width: 150px;">
                      <form action="{{ URL('/user')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <input type="text" name="name" size="15" class="form-inline">
                        <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                    </form>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                  
                    <tr>
                      <th>ID</th>
                      <th>用户名</th>
                      <th>手机号</th>
                      <th>操作</th>
                    </tr>
                    @foreach($list as $stu)
                      <tr>
                      <th>{{ $stu->id }}</th>
                      <th>{{ $stu->username }}</th>
                      <th>{{ $stu->phone }}</th>
                      <td><button class="btn btn-xs btn-danger">删除</button>|<button class="btn btn-xs btn-info">修改</button></td>
                    </tr>
                    @endforeach
                  </table>
                    
                </div><!-- /.box-body -->

              </div>
              <center style="float:right;">
              {!! $list->appends($where)->render() !!}
              </center>
              <!-- /.box -->
            </div>
          </div>
    </section>
  @endsection
