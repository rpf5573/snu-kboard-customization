<style>
.kboard-snu-clothing-menber-list .kboard-list tbody td.kboard-list-title .portrait { width: 35px; height: 35px; float: left;  background-image: url(<?php echo $content->attach->{'portrait'}[0]; ?>) !important; background-position: center top !important; background-repeat: no-repeat !important; background-size: cover !important; background-blend-mode: multiply; margin-right: 10px;}
.kboard-snu-clothing-menber-list .kboard-list tbody td.kboard-list-title .noimg { width: 35px; height: 35px; float: left; margin-right: 10px;}
.kboard-snu-clothing-menber-list .kboard-list tbody td.kboard-list-title .name_area { padding: 7px 0 0 0; }
.modal_container {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;

  display: none;
  justify-content: center;
  align-items: center;

  z-index: 1002;

  background-color:rgba(256, 256, 256, 0.7);
}

.modal_container.show-modal { 
  display: flex;
}

.modal_container .modal_wrap {
  position: relative;

  width: 800px;
  height: 800px;

  z-index: 1003;
  
  padding:0 30px 20px 30px;
  background:#fff;
  border: 2px solid #0F0F70;
}
.modal_container .modal_close { width: 26px; height: 26px; position: absolute; top: 10px; right: 10px; font-size:26px; cursor: pointer;}
.modal_container .modal_wrap .modal_detail { margin-top: 45px; margin-left: 5px; }
.modal_container .modal_close .closeImg { display: block; width: 100%; height: 100%; }
.modal-btn {
  color: #fff;
  font-size: 14px;
  background: #888;
}

.document_top_area { display: inline-block; margin-bottom:20px; width:100%;  }
.document_top_area .document_top_left { width: 20%; float: left; margin-right:1%;}
.document_top_area .document_top_left .portrait { width: 160px; height: 160px; background-image: url(<?php echo $content->attach->{'portrait'}[0]; ?>) !important; background-position: center top !important; background-repeat: no-repeat !important; background-size: cover !important; background-blend-mode: multiply;}
.document_top_area .document_top_left img { max-width: 160px; width:100%; border: 2px solid #888; }
.document_top_area .document_top_right { width: 75%; float: right;  }
.document_top_area .document_top_right .info_1line { border-bottom: 2px solid #777; margin-bottom:0px; padding-bottom: 5px;}
.document_top_area .document_top_right .info_1line .info_item span.title { font-size: 1.8rem; font-weight: 700; }
.document_top_area .document_top_right .info_1line .info_item span { font-size: 1rem; font-weight: 300; }
.document_top_area .document_top_right .info_2line { border-bottom: 1px solid #ccc; margin-bottom:0px; padding-bottom: 5px;}
.document_top_area .document_top_right .info_2line .info_item { width:24%; display: inline-block; }
.document_top_area .document_top_right .info_2line .info_item span.item_name { display: inline-block; font-size: 0.8rem; font-weight: 300; width:100%; color:#aaa; margin-bottom: 0px; }
.document_top_area .document_top_right .info_2line .info_item span.value { display: inline-block; font-size: 1rem; font-weight: 700; width:100%; color:#222; margin-bottom: 0px; }
.document_top_area .document_top_right .info_3line { border-bottom: 2px solid #777; margin-bottom:0px; padding-bottom: 5px; display: inline-block;  width:100%; }
.document_top_area .document_top_right .info_3line .info_item1 { width:24.5%; display: inline-block; float: left; }
.document_top_area .document_top_right .info_3line .info_item2 { width:75%; display: inline-block; float: right; }
.document_top_area .document_top_right .info_3line span.item_name { display: inline-block; font-size: 0.8rem; font-weight: 300; width:100%; color:#aaa; margin-bottom: 0px; }
.document_top_area .document_top_right .info_3line span.value { display: inline-block; font-size: 1rem; font-weight: 700; width:100%; color:#222; margin-bottom: 0px; }
.document_info_area { display: inline-block; margin-bottom:20px; width:100%; }
.document_info_area .info_1line { border-bottom: 2px solid #777; margin-bottom:0px; padding-bottom: 5px;}
.document_info_area .info_1line .info_item span.title { font-size: 1.25rem; font-weight: 700; }
.document_info_area .info_2line { border-bottom: 1px solid #ccc; margin-bottom:0px; padding-bottom: 5px;}
.document_info_area .info_2line .info_item { width:19.5%; display: inline-block; }
.document_info_area .info_2line .info_item span.item_name { display: inline-block; font-size: 0.8rem; font-weight: 300; width:100%; color:#aaa; margin-bottom: 0px; }
.document_info_area .info_2line .info_item span.value { display: inline-block; font-size: 1rem; font-weight: 700; width:100%; color:#222; margin-bottom: 0px; }
.document_info_area .info_3line { border-bottom: 2px solid #777; margin-bottom:0px; padding-bottom: 5px; display: inline-block;  width:100%; }
.document_info_area .info_3line .info_item1 { width:19.5%; display: inline-block; float: left; }
.document_info_area .info_3line .info_item2 { width:59.5%; display: inline-block; float: right; }
.document_info_area .info_3line span.item_name { display: inline-block; font-size: 0.8rem; font-weight: 300; width:100%; color:#aaa; margin-bottom: 0px; }
.document_info_area .info_3line span.value { display: inline-block; font-size: 1rem; font-weight: 700; width:100%; color:#222; margin-bottom: 0px; }
.document_info2_area { display: inline-block; margin-bottom:20px; width:100%; }
.document_info2_area .info_1line { border-bottom: 2px solid #777; margin-bottom:0px; padding-bottom: 5px;}
.document_info2_area .info_1line .info_item span.title { font-size: 1.25rem; font-weight: 700; }
.document_info2_area .info_2line { border-bottom: 1px solid #ccc; margin-bottom:0px; padding-bottom: 5px;}
.document_info2_area .info_2line .info_item { width:100%; display: inline-block; }
.document_info2_area .info_2line .info_item span.item_name { display: inline-block; font-size: 0.8rem; font-weight: 300; width:100%; color:#aaa; margin-bottom: 0px; }
.document_info2_area .info_2line .info_item span.value { display: inline-block; font-size: 1rem; font-weight: 700; width:100%; color:#222; margin-bottom: 0px; }
.document_info2_area .info_3line { border-bottom: 2px solid #777; margin-bottom:0px; padding-bottom: 5px; display: inline-block;  width:100%; }
.document_info2_area .info_3line .info_item { width:100%; display: inline-block; }
.document_info2_area .info_3line span.item_name { display: inline-block; font-size: 0.8rem; font-weight: 300; width:100%; color:#aaa; margin-bottom: 0px; }
.document_info2_area .info_3line span.value { display: inline-block; font-size: 1rem; font-weight: 700; width:100%; color:#222; margin-bottom: 0px; }
</style>

<?php
$action = isset($_GET['action']) ? sanitize_text_field($_GET['action']) : '';
if($action == 'kboard_snu_clothing_menber_more_view'):
	// 리스트 레이아웃을 불러온다.
	if(isset($_GET['current_page']) && $_GET['current_page'] == 'admin'){
		include 'list3.php';
	}
	else{
		include 'list2.php';
	}
else:
?>

<div id="kboard-snu-clothing-menber-list">
	<input type="hidden" name="kboard_snu_clothing_menber_page" value="<?php echo $list->page?>">
	<input type="hidden" name="kboard_snu_clothing_menber_category1" value="<?php echo $list->category1?>">
	<input type="hidden" name="kboard_snu_clothing_menber_category2" value="<?php echo $list->category2?>">
	<input type="hidden" name="kboard_snu_clothing_menber_current_page" value="<?php echo is_admin() ? 'admin' : ''?>">
	<input type="hidden" name="kboard_snu_clothing_menber_latest_board_url" value="<?php echo $_SERVER['REQUEST_URI']?>">
	
	<div class="kboard-snu-clothing-menber-list">
		<!-- 게시판 정보 시작 -->
		<div class="kboard-list-header">
			
			<!-- 검색폼 시작 -->
			<div class="kboard-search">
				<form id="kboard-search-form-<?php echo $board->id?>" method="get" action="<?php echo $url->toString()?>">
		        	<?php echo $url->set('pageid', '1')->set('target', '')->set('keyword', '')->set('mod', 'list')->toInput()?>
					<input type="text" name="keyword" value="<?php echo kboard_keyword()?>" placeholder="이름, 연락처, 이메일 등을 입력하세요"  required>
					<button type="submit" class="kboard-search-button"><i class="xi-search"></i></button>
				</form>
			</div>
			<!-- 검색폼 끝 -->
			
		</div>
		<!-- 게시판 정보 끝 -->
	<!-- 카테고리 시작 -->
	<?php
	if($board->use_category == 'yes'){
		if($board->isTreeCategoryActive()){
			$category_type = 'tree-select';
		}
		else{
			$category_type = 'default';
		}
		$category_type = apply_filters('kboard_skin_category_type', $category_type, $board, $boardBuilder);
		echo $skin->load($board->skin, "list-category-{$category_type}.php", $vars);
	}
	?>
	<!-- 카테고리 끝 -->	
	
	<!-- 리스트 정렬 시작 -->
	<div class="kboard-count-sort">
		<?php if(!$board->isPrivate()):?>
			<div class="kboard-total-count">
				<?php echo __('Total', 'kboard')?> <?php echo number_format($board->getListTotal())?>
			</div>
		<?php endif?>
		
		<div class="kboard-sort">
			<form id="kboard-sort-form-<?php echo $board->id?>" method="get" action="<?php echo $url->toString()?>">
				<?php echo $url->set('pageid', '1')->set('category1', '')->set('category2', '')->set('target', '')->set('keyword', '')->set('mod', 'list')->set('kboard_list_sort_remember', $board->id)->toInput()?>
				
				<select name="kboard_list_sort" onchange="jQuery('#kboard-sort-form-<?php echo $board->id?>').submit();">
          <option value="name"<?php if($list->getSorting() == 'name'):?> selected<?php endif?>><?php echo __('Name', 'kboard')?></option>
					<option value="newest"<?php if($list->getSorting() == 'newest'):?> selected<?php endif?>><?php echo __('Newest', 'kboard')?></option>
          <option value="updated"<?php if($list->getSorting() == 'updated'):?> selected<?php endif?>><?php echo __('Updated', 'kboard')?></option>
				</select>

        <select name="kboard_list_rpp" onchange="jQuery('#kboard-sort-form-<?php echo $board->id?>').submit();">
          <option value="50"<?php if($list->getRpp() === 2):?> selected<?php endif?>>2개</option>
          <option value="100"<?php if($list->getRpp() == 3):?> selected<?php endif?>>3개</option>
          <option value="300"<?php if($list->getRpp() == 4):?> selected<?php endif?>>4개</option>
          <option value="500"<?php if($list->getRpp() == 5):?> selected<?php endif?>>5개</option>
          <option value="1000"<?php if($list->getRpp() == 6):?> selected<?php endif?>>6개</option>
				</select>
			</form>
		</div>
	</div>
	<!-- 리스트 정렬 끝 -->
	
		<!-- 리스트 시작 -->
		<div class="kboard-list">
			<table>
				<thead>
					<tr>
						<td class="kboard-list-uid"><?php echo __('Number', 'kboard')?></td>
						<td class="kboard-list-title"><div class="left-line"><?php echo __('이름', 'kboard')?></div></td>						
						<?php if($board->use_category && $board->initCategory1()):?>
						<td class="kboard-list-category1">
							<div class="left-line"><?php echo __('입학년도', 'kboard')?></div>
						</td>
						<?php endif?>
						<td class="kboard-list-mobile"><div class="left-line"><?php echo __('연락처', 'kboard')?></div></td>
						<td class="kboard-list-email"><div class="left-line"><?php echo __('이메일', 'kboard')?></div></td>
						<td class="kboard-list-job"><div class="left-line"><?php echo __('직업', 'kboard')?></div></td>
						<td class="kboard-list-view"><div class="left-line"><?php echo __('상세보기', 'kboard')?></div></td>
						<?php if($board->isWriter()):?><td class="kboard-list-view"><div class="left-line"><?php echo __('관리', 'kboard')?></div></td><?php endif?>
					</tr>
				</thead>
				<tbody>

					<?php
            // 리스트 레이아웃을 불러온다.
            if(is_admin()){
              include_once 'list-admin.php';
            }
            else{
              include_once 'list-user.php';
            }
					?>
				</tbody>
			</table>
		</div>
		<!-- 리스트 끝 -->
		
		<!-- 페이징 시작 -->
		<div class="kboard-pagination">
			<button class="kboard-snu-clothing-menber-button-small" onclick="return kboard_snu_clothing_menber_more_view(this, '<?php echo $board->id?>')" title="<?php echo __('View More', 'kboard-snu-clothing-menber')?>"><?php echo __('View More', 'kboard-snu-clothing-menber')?></button>
		</div>
		<!-- 페이징 끝 -->

		<?php if($board->isWriter()):?>
			<div class="writer_button" style="text-align: right;"><a href="<?php echo $url->getContentEditor()?>" class="kboard-snu-clothing-menber-button-small" title="<?php echo __('등록하기', 'kboard-snu-clothing-menber')?>"><?php echo __('등록하기', 'kboard-snu-clothing-menber')?></a></div>
		<?php endif?>
				
		<?php if($board->contribution()):?>
		<div class="kboard-snu-clothing-menber-poweredby">
			<a href="https://www.cosmosfarm.com/products/kboard" onclick="window.open(this.href);return false;" title="<?php echo __('KBoard is the best community software available for WordPress', 'kboard')?>">Powered by KBoard</a>
		</div>
		<?php endif?>
	</div>
</div>
<?php wp_enqueue_script('kboard-snu-clothing-menber-list', "{$skin_path}/list.js", array(), KBOARD_snu_clothing_menber_VERSION, true)?>
<?php endif?>
<script>
'use strict';
(($) => {
  document.addEventListener("DOMContentLoaded", () => {
    const $buttons = $('.kboard-list-view > .modal-btn');
    if ($buttons.length === 0) return;

    $(".modal_container").on("click", (e) => {
      const $target = $(e.currentTarget);
      const wrap = e.currentTarget.querySelector('.modal_wrap');
      const originalEvent = e.originalEvent;
      const paths = originalEvent.composedPath();
      !paths.includes(wrap) && $target.removeClass("show-modal");
    });

    $('.modal_close').on("click", (e) => {
      const $target = $(e.currentTarget);
      console.log($target);
      const $container = $($target.closest('.modal_container'));
      $container.removeClass('show-modal');
    });

    $buttons.on("click", (e) => {
      const $target = $(e.currentTarget);
      const id = $target.attr("data-modal-id");
      $(`.modal_container[data-modal-id="${id}"]`).addClass('show-modal');
    });
  });
})(jQuery);
</script>
