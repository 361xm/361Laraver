@extends("admin.base.base")

@section("content")
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">评论管理中心</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>编号</th>
                        <th>用户名</th>
                        <th>评论对象</th>
                        <th>状态</th>
                        <th>时间</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>121</td>
                        <td>轻微</td>
                        <td>鞋</td>
                        <td>123</td>
                        <td>456</td>
                        <td><button class="btn btn-xs btn-danger">删除</button>|<button class="btn btn-xs btn-info">查看详情</button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
@endsection