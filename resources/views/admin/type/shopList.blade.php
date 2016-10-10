@extends("admin.base.base")

@section("content")
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">商品详情表</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>编号</th>
                        <th>商品名称</th>
                        <th>商品类别</th>
                        <th>商品价格</th>
                        <th>商品详情</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>男</td>
                        <td>鞋</td>
                        <td></td>
                        <td></td>
                        <td><button class="btn btn-xs btn-danger">删除</button>|<button class="btn btn-xs btn-info">修改</button></td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                      </tr>
                      <tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
@endsection