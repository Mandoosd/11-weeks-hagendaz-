<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<main id="content">
            <section class="main_visual">
                <h2 class="blind">메인콘텐츠</h2>
                <div class="main_visual_content">
                    <div class="content" tabindex="0">
                        <h3>아파트입주청소</h3>
                        <strong>신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소</strong>
                        <p>
                            보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등<br />
                            구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.
                        </p>
                    </div>
                </div>
            </section>
            <section class="main_content">
                <h2 class="blind">청소종류</h2>
                <div class="inner">
                    <div class="itm">
                        <figure class="img_box">
                            <img src="<?php echo G5_THEME_URL ?>/images/main_s011.jpg" alt="아파트입주청소">
                        </figure>
                        <div class="tit">
                            부산 아파트입주청소
                        </div>
                        <p class="desc">
                            신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소를 말하며
                            보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                            구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.
                        </p>
                        <a href="" class="lnk">more</a>
                    </div>
                    <div class="itm">
                        <figure class="img_box">
                            <img src="<?php echo G5_THEME_URL ?>/images/main_s012.jpg" alt="아파트입주청소">
                        </figure>
                        <div class="tit">
                            부산 아파트입주청소
                        </div>
                        <p class="desc">
                            신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소를 말하며
                            보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                            구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.
                        </p>
                        <a href="" class="lnk">more</a>
                    </div>
                    <div class="itm">
                        <figure class="img_box">
                            <img src="<?php echo G5_THEME_URL ?>/images/main_s013.jpg" alt="아파트입주청소">
                        </figure>
                        <div class="tit">
                            부산 아파트입주청소
                        </div>
                        <p class="desc">
                            신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소를 말하며
                            보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                            구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.
                        </p>
                        <a href="" class="lnk">more</a>
                    </div>
                </div>
            </section>
        </main>


<?php
include_once(G5_THEME_PATH.'/tail.php');