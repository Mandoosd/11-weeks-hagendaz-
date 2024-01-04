<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
?>
   <div class="skip">
        <a href="#content">본문바로가기</a>
    </div>
    <div class="wrap">
        <header id="header" class="header">
            <div class="inner">
                <h1>
                    <a href="<?php echo G5_THEME_URL ?>">
                        <img src="<?php echo G5_THEME_URL ?>/images/logo.png" alt="반응형기본">
                    </a>
                </h1>
                <nav class="gnb">
                    <ul>
                        <li><a href="./m01.html">금맥청소 소개</a></li>
                        <li><a href="">아파트입주청소</a></li>
                        <li><a href="">이사/상가청소</a></li>
                        <li><a href="">사무실청소</a></li>
                        <li><a href="bbs/board.php?bo_table=gallery">청소갤러리</a></li>
                        <li><a href="bbs/board.php?bo_table=free">질문과답변</a></li>
                    </ul>
                </nav>
                <div class="mopen">
                    <button aria-label="모바일 메뉴 열기 버튼">
                        <span class="material-symbols-outlined">
                            menu
                        </span>
                    </button>
                </div>
            </div>
        </header>