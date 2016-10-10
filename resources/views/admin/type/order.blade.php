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
                        <th>订单号</th>
                        <th>下单时间</th>
                        <th>收货人</th>
                        <th>收货地址</th>
                        <th>总金额</th>
                        <th>订单状态</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>121</td>
                        <td>轻微</td>
                        <td>鞋</td>
                        <td>123</td>
                        <td>ghj</td>
                        <td>456</td>
                        <td><button class="btn btn-xs btn-info">查看详情</button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
@endsection