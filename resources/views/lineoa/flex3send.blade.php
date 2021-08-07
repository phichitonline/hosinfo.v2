@extends('layouts.theme')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $controller_name }}
            <small>{{ config('app.name') }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">{{ $controller_name }}</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">ส่งข่าวประชาสัมพันธ์ LineOA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <h5 class="box-title">เลือกรูปแบบ Flex message ที่ต้องการส่ง</h3>
              <div class="row">
                <div class="col-md-4">
                    <a href="{{ url('/lineoa/flex3') }}"><img class="img-responsive pad" src="../dist/img/flex3.png" alt=""></a>
                </div>
                <div class="col-md-8">
                    ส่งข้อความ Flex แล้ว
                    หัวข้อข่าว : {{ $msg_head }}<br>
                    เนื้อหา : {{ $msg_text }}<br><br>
                    ผู้รับ : <br>
                    
                @foreach ($idline_target as $data)
                    @php $line_id = $data->line_id; @endphp
                  {{ $data->hn }}
                  
                
@php

		// ********** ส่งข้อมูลนัดใน Line Official *********** //
 		// $access_token = 'jPxuNlhHDFj0YJNMx8T15CMTYIHSekuh2/Ie4zGGuvsr8q89WxmQbTYawot3CwW/xbSjXwJEKXtZtbZbQ1GVga377qm9G6Av/xYhYd9xGdujw25NWEdotdjZDCbcsGykGSB7hPRKTY55YxiPnUjgegdB04t89/1O/w1cDnyilFU='; // หมอเตือนนัด
		$access_token = 'qOUJQH7nfitZFH0038OwxIP8KR/pFyapst8GXVU9LRXU1pStX9Fb+ZgSTMdc2S1Us8Vnl16riyl766lFwsuqdRNClH4DK3HxiollknuelONUTdT5XNf+WfWnK9RxDka+8YmEpuUKP88Dv/VJbRDzIAdB04t89/1O/w1cDnyilFU='; // รพร.ตะพานหิน
		$pushID = $line_id;
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.line.me/v2/bot/message/push",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>'{

            "to": "'.$pushID.'",
            "messages": [{
            "type": "flex",
            "altText": "'.$msg_head.'",
            "contents": {


  "type": "bubble",
  "size": "'.$msg_size.'",
  "header": {
    "type": "box",
    "layout": "vertical",
    "contents": [
      {
        "type": "text",
        "text": "ข่าวประชาสัมพันธ์",
        "weight": "bold",
        "size": "xl",
        "align": "center",
        "color": "#ffffff"
      }
    ]
  },
  "body": {
    "type": "box",
    "layout": "vertical",
    "contents": [
      {
        "type": "text",
        "weight": "bold",
        "size": "xl",
        "color": "#ff0000",
        "text": "'.$msg_head.'",
        "wrap": true
      },
      {
        "type": "text",
        "text": "'.$msg_text.'",
        "wrap": true,
        "margin": "md"
      },
      {
        "type": "separator",
        "margin": "lg"
      },
      {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "text",
            "text": "'.$msg_other.'",
            "wrap": true,
            "style": "italic",
            "size": "sm"
          }
        ],
        "margin": "lg"
      }
    ]
  },
  "footer": {
    "type": "box",
    "layout": "vertical",
    "contents": [
      {
        "type": "text",
        "text": "ติดตามข้อมูลข่าวสารเพิ่มเติมทางเว็บไซต์",
        "color": "#ffffff",
        "size": "sm",
        "action": {
          "type": "uri",
          "label": "action",
          "uri": "'.$msg_link.'"
        }
      }
    ],
    "alignItems": "center"
  },
  "styles": {
    "header": {
      "backgroundColor": "#3498db"
    },
    "footer": {
      "separator": true,
      "backgroundColor": "#3498db"
    }
  }


            }
            }]
        }',

        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer ".$access_token."",
            "Content-Type: application/json"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

		// ********************************************** //

@endphp

,&nbsp;

@endforeach

                </div>
            </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- ./Main content -->

</div>
<!-- ./Content Wrapper -->

@endsection