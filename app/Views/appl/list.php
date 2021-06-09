<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>함께 일하고 함께 돌보는 육아육아맞집</title>
    <style>
        body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre,
        form, fieldset, input, textarea, p, blockquote, th, td {
            padding: 0;
            margin: 0;
        }

        .list-table {
            border-collapse:collapse;
        }

        .list-table th {padding: 5px;}
        .list-table td {padding: 5px;}
    </style>
</head>
<body>
<div>
    <div style="margin: 10px;">
        <a href="/appl/excel" target="_blank">엑셀 다운로드</a>

        <a href="/appl/logout">로그아웃</a>
    </div>
    <table class="list-table" border="1">
        <tr>
            <th style="width:80px;">No.</th>
            <th style="width:180px;">이름</th>
            <th style="width:180px;">전화번호</th>
            <th style="">참여URL</th>
            <th style="width:180px;">등록일</th>
        </tr>
        <?php foreach ($list as $key => $val) { ?>
            <tr>
                <td style="text-align: center;"><?= $val['id'] ?></td>
                <td><?= $val['name'] ?></td>
                <td><?= $val['phone_number'] ?></td>
                <td><?= $val['url'] ?></td>
                <td><?= $val['created_at'] ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>