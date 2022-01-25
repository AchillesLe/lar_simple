<!DOCTYPE html>
<html>

<head>
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>受験票/入学試験時程出力</title>
    <link rel="stylesheet" href="{{ asset('css/content-style.css') }}">
    <style>
        /* @font-face {
            font-family: ipag;
            font-style: normal;
            font-weight: normal;
            src: url('{{ asset("fonts/ipag.ttf")}}') format('truetype');
        }

        body {
            font-family: ipag;
            word-wrap: break-word;
        }

        .col {
            margin-left: auto;
            margin-right: auto;
        }

        .title {
            font-size: 25px;
            text-align: center;
        }

        .title_confirm {
            font-size: 20px;
            padding: 10px;
            text-align: center;
        }

        .first,
        .last {
            padding: 5px 15px;
        }

        .first {
            text-align: right;
        }

        .last {
            text-align: left;
        } */
        body {
            font-family: 'ipag';
        }
    </style> -->

</head>

<body>
    <div class="wrap">
        <div class="container">
            <div class="title">ABC　WEB出願システム管理画面]</div>
            <div class="title">専修学校クラーク高等学院</div>
            <div class="title_confirm">
                <div>受験票発行</div>
            </div>
            <div>
                <table id="my-table" class="col" style="border: none !important">
                    <tr>
                        <td class="first">受験番号</td>
                        <td class="last">123123213</td>
                    </tr>
                    <tr>
                        <td class="first">氏名</td>
                        <td class="last">23432432432</td>
                    </tr> 
                    <tr>
                        <td class="first">入試試験時程</td>
                        <td class="last">324234324324</td>
                    </tr>
                    <tr>
                        <td class="first">面接時間</td>
                        <td class="last">56765765765756</td>
                    </tr>
                </table>
            </div>
            <div class="ck-content" dir="ltr">
                {!! $data['content'] !!}
            </div>
        </div>
    </div>

</body>

</html>