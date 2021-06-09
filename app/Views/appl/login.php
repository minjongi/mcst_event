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

        .login-box {
            margin-top: 100px;
        }

        .login-box table {
            margin:0 auto;
            border-collapse:collapse;
        }

        .login-box table {
            margin:0 auto;
            font-size:14px;
        }

        .login-box table input {
            width: 100%;
            height:25px;
        }

        .login-box table th {padding: 10px;}
        .login-box table td {padding: 10px;}
    </style>
</head>
<body>
<div class="login-box">
    <form action="/appl/login" method="post" onsubmit="return login()">
        <table border="1">
            <tr>
                <th>아이디</th>
                <td><input type="text" name="id" id="id"></td>
            </tr>
            <tr>
                <th>비밀번호</th>
                <td><input type="text" name="pw" id="pw"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button tyep="submit">로그인</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function login() {
        if (!$.trim($('#id').val())) {
            alert('아이디를 입력해 주세요');
            return false;
        }

        if (!$.trim($('#pw').val())) {
            alert('아이디를 입력해 주세요');
            return false;
        }

        return true;
    }
</script>
</body>
</html>