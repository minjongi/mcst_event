<div class="header-menu">
    <h1 class="logo"><a href="/"><img src="/assets/img/common/logo.png?d=<?= NO_CACHE_PARAM ?>" alt="엘리트학생복"></a></h1>
    <div class="gnb">
        <ul class="gnb_out gnb-act">
            <li><a href="#">학교주관구매</a></li>
            <li><a href="#">엘리트교복</a></li>
            <li><a href="#">매장&고객센터</a></li>
            <li><a href="#">갤러리</a></li>
            <li><a href="#">브랜드소개</a></li>
        </ul>
        <div class="gnb_over gnb-act">
            <ul class="menu">
                <li>
                    <ul>
                        <li><a href="/lab/comfortable">THE편한교복</a></li>
                        <li><a href="/lab/goodquality">THE좋은품질</a></li>
                        <li><a href="/lab/goodservice">THE착한서비스</a></li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li><a href="/fit/boy?type=ha">남학생</a></li>
                        <li><a href="/fit/girl?type=ha">여학생</a></li>
                        <li><a href="/fit/casual">생활복</a></li>
                        <li><a href="/fit/training">체육복</a></li>
                        <li><a href="/fit/item">기타용품</a></li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li><a href="/customercenter/agencyList">매장찾기</a></li>
                        <li><a href="/customercenter/faqList">Q&amp;A</a></li>
                        <li><a href="/customercenter/manage">교복관리법</a></li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li><a href="/gallery/video">무비</a></li>
                        <li><a href="/gallery/artbook">화보</a></li>
                        <li><a href="/brand/song">엘리트 송</a></li>
                        <li><a href="/brand/pplgallery">협찬</a></li>
                        <li><a href="/brand/modelhistory">역대 모델</a></li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li><a href="/brand/history">연혁</a></li>
                        <li><a href="/brand/award">수상내역</a></li>
                        <li><a href="/lab/academy">교복 아카데미</a></li>
                        <li><a href="/brand/social">사회공헌</a></li>
                        <li><a href="/brand/global">글로벌 엘리트</a></li>
                        <li><a href="/lab/research">1318리서치</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.gnb-act').on('mouseover', function () {
            $('.gnb_over').show();
        });

        $('.gnb-act').on('mouseout', function () {
            $('.gnb_over').hide();
        })
    });
</script>