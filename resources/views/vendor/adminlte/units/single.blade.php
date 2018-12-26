
@extends('adminlte::layouts.app')


@section('main-content')
  @php
   $unit_type = ['شقه','محل'];
   $status = ['غير مباعة' , 'مباعة'];
   $sell_type = ['كاش' , 'قسط']
  @endphp
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">وحدة رقم {{$unit->flat_no}} عمارة {{$unit->lands->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                  <tr>
                  <th> النوع </th>
                  <td><b>{{$unit_type[$unit->unit_type]}}</b></td>
                </tr>
                <tr>
                  <th>المساحة</th>
                  <td> {{$unit->area}} </td>
                </tr>
                <tr>
                  <th>السعر</th>
                  <td> {{$unit->price}}</td>
                </tr>
                <tr>
                  <th>الحالة</th>
                  <td> {{$status[$unit->status]}} </td>
                </tr>
                <?php if($unit->status == 1){
                  ?>
                <tr>
                  <th>طريقة البيع</th>
                  <td>{{$sell_type[$unit->selling_method]}}</td>
                </tr>
                <?php
              }?>
                <tr>
                  <th>وصف الوحده</th>
                  <td>{{$unit->description}}</td>
                </tr>

              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <?php
            if($unit->status == 1){
              ?>
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">بيانات المشتري</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                      <th>الاسم</th>
                      <td><b>{{$unit->client->name}}</b></td>
                    </tr>
                    <tr>
                      <th>العنوان</th>
                      <td>{{$unit->client->address}}</td>
                    </tr>
                    <tr>
                      <th>الرقم القومي</th>
                      <td>{{$unit->client->client_id_no}}</td>
                    </tr>
                    <tr>
                      <th>رقم الهاتف</th>
                      <td>{{$unit->client->mobile_no}}</td>
                    </tr>

                  </tbody></table>
                </div>
                <!-- /.box-body -->
              </div>
              <?php
            }else{
              ?>
              <div class="col-md-12">
                <form class="" action="/unitsale/{{$unit->id}}" method="post">
                  {{ csrf_field() }}
                  <button type="submit" class="btn-lg btn-primary">بيع الوحده </button>
                </form>
              </div>
              <?php
            }
          ?>

        </div>

      <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">مكتبة الصور</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="https://upload.3dlat.com/uploads/3dlat.net_26_15_43d2_almstba-com-1341445061-535.gif" alt="Third slide">
                  </div>
                  @foreach ($unit->photos as $photo)
                    <div class="item">
                      <img src="{{URL::asset('/images/'.$unit->id .$photo->filename)}}" alt="Second slide">
                    </div>
                  @endforeach
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <?php
          if($unit->status == 1){
            ?>
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">الأقساط</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>رقم القسط</th>
                  <th>قيمة القسط</th>
                  <th>تاريخ الاستحقاق </th>
                  <th>الحالة</th>
                  <th>المدفوع</th>
                  <th>المتبقي</th>
                  <th>دفع جزء </th>
                  <th>دفع الكل</th>
                </tr>
                <tbody>
                  @foreach ($unit->installements as $i=>$installement)
                    @php
                        $cost = $installement->cost - $installement->remaining_cost ;
                       if($cost == $installement->cost){
                         $status['text'] = "payed";
                         $status['color'] = "label-success";
                       } elseif($cost == 0){
                         $status['text'] = "not payed";
                         $status['color'] = "label-danger";
                       }else{
                         $status['text'] = "partial payed";
                         $status['color'] = "label-warning";

                       }
                    @endphp
                    <tr>
                      <td>{{$i+1}}</td>
                      <td>{{$installement->cost}}</td>
                      <td>{{$installement->due_date}}</td>
                      <td><span class="label <?= $status['color'] ?>">{{$status['text']}}</span></td>
                      <td>{{$cost}}</td>
                      <td>{{$installement->remaining_cost}}</td>
                      <td>
                        <button type="button"  data-id="{{$installement->id}}" class="partial btn btn-primary" autocomplete="off" > pay </button>
                        <input id="amount-{{$installement->id}}" type="number" name="amount" placeholder="0">
                      </td>

                      <td><button type="button"  data-id="{{$installement->id}}" data-loading-text="Loading..." class="pay btn btn-primary" autocomplete="off" > Pay All </button></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

        </div>
        <?php
      }
        ?>
    </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
<script>
  jQuery('.pay').on('click', function () {
    var r = confirm("تأكيد دفع كامل مبلغ القسط");
    if ( r == true){
      var id = $(this).data('id');
          var request = $.ajax({
              url: "/installement/pay/" + id,
              type: "get",
            });

      request.done(function(msg) {
        alert('payment succeeded');
        location.reload();
            });

      request.fail(function(jqXHR, textStatus) {
        alert( "Request failed: " + textStatus );
      });
    }

  })
  jQuery('.partial').on('click', function () {
    var id = $(this).data('id');
    var amount = $('#amount-' + id).val();
    var r = confirm(" تأكيد دفع مبلغ" + amount + " جنيه من القسط المستحق ؟؟");
    if ( r == true){
      var id = $(this).data('id');
          var request = $.ajax({
              url: "/installement/partial/" + id,
              type: "get",
              data:{
                amount : amount ,
              }
            });

      request.done(function(msg) {
        alert("تمت العملية بنجاح..");
        location.reload();
            });

      request.fail(function(jqXHR, textStatus) {
        console.log(jqXHR.responseText);
        alert( "Request failed: " + textStatus );
      });
    }

  })
</script>
@endsection
