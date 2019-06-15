<style>
	/*linh add*/
	#datetimepicker1 input {
		height: 55px;
		background: none;
		border: ghostwhite;
		background-color: aliceblue;
		color: inherit;
		font-size: 16px;
	}

	.input-group-addon {
		background: center;
		border: #e27240;
		background-color: #ffffffba;
		color: inherit;
	}
</style>

<div class="theme-hero-area front">
	<div class="theme-hero-area-bg-wrap">
		<div class="theme-hero-area-bg" style="background-image:url(template/fontend/img/gmtx7uc6lnc_1500x800.jpg);"
			 id="hero-banner"></div>
		<div class="theme-hero-area-mask theme-hero-area-mask-strong"></div>
	</div>
	<div class="theme-hero-area-body">
		<div class="container">
			<div class="row _pv-100">
				<div class="col-md-10 col-md-offset-1">
					<form method="get" action="search-hotel">
						<div class="theme-search-area-form" id="hero-search-form">
							<div class="row" data-gutter="none">
								<div class="col-md-4 ">
									<div
										class="theme-search-area-section first theme-search-area-section-fade-white theme-search-area-section-mr theme-search-area-section-no-border theme-search-area-section-curved">
										<div class="form-group theme-search-area-section-inner">
											<i class="theme-search-area-section-icon lin lin-location-pin"></i>
											<input style="background-color: aliceblue;"
												   class="theme-search-area-section-input typeahead" type="text"
												   name="key"
												   placeholder="Tên khách sạn hoặc địa điểm" data-provide="typeahead"
												   value="<?= $input['key']; ?>"
												   required/>
										</div>
									</div>
								</div>
								<div class="col-md-6 ">

									<div class="row" data-gutter="none">
										<div class="col-md-6 ">
											<div
												class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-mr theme-search-area-section-no-border theme-search-area-section-curved">
												<div class='input-group date' id='datetimepicker1'>
													<input type='text' class="form-control" name="check-in"
														   id="check-in"
														   value="<?= $input['check-in']; ?>"
														   required/>
													<span class="input-group-addon">
													<span>Check-In</span>
                    								</span>
												</div>
											</div>
										</div>
										<div class="col-md-6 ">
											<div
												class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-mr theme-search-area-section-no-border theme-search-area-section-curved">
												<div class='input-group date' id='datetimepicker1'>
													<input type='text' class="form-control" name="check-out"
														   id="check-out"
														   value="<?= $input['check-out']; ?>"
														   required/>
													<span class="input-group-addon">
													<span>
														Check-Out
													</span>
												</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-2 ">
									<button
										class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-no-border theme-search-area-submit-white theme-search-area-submit-curved"
										type="submit">
										<i class="theme-search-area-submit-icon fa fa-angle-right"></i>
										<span class="_desk-h">Tìm kiếm</span>
									</button>
								</div>

							</div>
						</div>
					</form>

					<div class="theme-search-area-inline _desk-h theme-search-area-inline-white">
						<h4 class="theme-search-area-inline-title">New York Hotels</h4>
						<p class="theme-search-area-inline-details">June 27 &rarr; July 02, 1 Room</p>
						<a class="theme-search-area-inline-link magnific-inline" href="#searchEditModal">
							<i class="fa fa-pencil"></i>Edit
						</a>
						<div class="magnific-popup magnific-popup-sm mfp-hide" id="searchEditModal">
							<div class="theme-search-area theme-search-area-vert">
								<div class="theme-search-area-header">
									<h1 class="theme-search-area-title theme-search-area-title-sm">Edit your Search</h1>
									<p class="theme-search-area-subtitle">Prices might be different from current
										results</p>
								</div>
								<div class="theme-search-area-form">
									<div class="theme-search-area-section first theme-search-area-section-curved">
										<label class="theme-search-area-section-label">Where</label>
										<div class="theme-search-area-section-inner">
											<i class="theme-search-area-section-icon lin lin-location-pin"></i>
											<input class="theme-search-area-section-input typeahead" value="New York"
												   type="text" placeholder="Hotel Location" data-provide="typeahead"/>
										</div>
									</div>
									<div class="row" data-gutter="10">
										<div class="col-md-6 ">
											<div class="theme-search-area-section theme-search-area-section-curved">
												<label class="theme-search-area-section-label">Check In</label>
												<div class="theme-search-area-section-inner">
													<i class="theme-search-area-section-icon lin lin-calendar"></i>
													<input
														class="theme-search-area-section-input datePickerStart _mob-h"
														value="Wed 06/27" type="text" placeholder="Check-in"/>
													<input class="theme-search-area-section-input _desk-h mobile-picker"
														   value="2018-06-27" type="date"/>
												</div>
											</div>
										</div>
										<div class="col-md-6 ">
											<div class="theme-search-area-section theme-search-area-section-curved">
												<label class="theme-search-area-section-label">Check Out</label>
												<div class="theme-search-area-section-inner">
													<i class="theme-search-area-section-icon lin lin-calendar"></i>
													<input class="theme-search-area-section-input datePickerEnd _mob-h"
														   value="Mon 07/02" type="text" placeholder="Check-out"/>
													<input class="theme-search-area-section-input _desk-h mobile-picker"
														   value="2018-07-02" type="date"/>
												</div>
											</div>
										</div>
									</div>
									<button
										class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-curved">
										Change
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="theme-page-section theme-page-section-dark theme-page-section-lg">
	<div class="container">
		<div class="row row-col-static" id="sticky-parent" data-gutter="20">
			<div class="col-md-12-5 ">
				<?php if(!empty($result)):?>
				<div class="theme-search-results-sort _mob-h _b-n clearfix">
					<h5 class="theme-search-results-sort-title">Sắp Xếp:</h5>
					<ul class="theme-search-results-sort-list">
						<li>
							<a href="search-hotel?key=<?php echo $input['key'] . '&check-in=' . $input['check-in'] . '&check-out=' . $input['check-out'].'&sort=1'; ?>">Giá
								<span>Thấp &rarr; Cao</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="theme-search-results-sort-select _desk-h">
					<select>
						<option>Giá</option>
						<option>Tên</option>
					</select>
				</div>

				<div class="theme-search-results">
					<div class="_mob-h">
						<div
							class="theme-search-results-item _mb-10 _b-n theme-search-results-item-rounded theme-search-results-item-">
							<?php foreach ($result as $result): ?>
								<div class="theme-search-results-item-preview">
									<a class="theme-search-results-item-mask-link collapsed"
									   href="search-room?id=<?php echo $result['id_hotel'] . '&check-in=' . $input['check-in'] . '&check-out=' . $input['check-out']; ?>"
									   role="button"></a>
									<div class="row" data-gutter="20">
										<div class="col-md-5 ">
											<div class="theme-search-results-item-img-wrap">
												<img class="theme-search-results-item-img"
													 src="<?= base_url() ?>/assets/images/<?= $result['image'] ?>"
													 alt="Image Alternative text" title="Image Title"/>
											</div>
										</div>
										<div class="col-md-5 ">
											<h5 class="theme-search-results-item-title _fw-b _mb-20 _fs theme-search-results-item-title-lg">
												<?= $result['hotel_name'] ?></h5>
											<p class="theme-search-results-item-location">
												<i class="fa fa-map-marker"></i><?= $result['address'] ?>
											</p>
											<ul class="theme-search-results-item-hotel-features"></ul>
										</div>
										<div class="col-md-2 ">
											<div class="theme-search-results-item-book">
												<div class="theme-search-results-item-price">
													<h4><?= number_format($result['prices']) ?> vnđ</h4>
													<p class="theme-search-results-item-price-sign">giá trung bình</p>
												</div>
												<a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn"
												   href="search-room?id=<?php echo $result['id_hotel'] . '&check-in=' . $input['check-in'] . '&check-out=' . $input['check-out']; ?>">
													Xem ngay</a>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>

						</div>
					</div>
				</div>
				<?php endif;?>
				<?php if(empty($result)):?>
					<div class="theme-page-404 _ta-c">
						<h1 class="theme-page-404-title" style="font-size: 100px;">Lỗi</h1>
						<p class="theme-page-404-subtitle">Xin lỗi, chúng tôi không có kết quả cho tìm kiếm này</p>
						<a class="btn btn-ghost btn-xxl btn-white btn-uc" href="<?=base_url()?>">Quay lại trang chủ</a>
					</div>
				<?php endif;?>
<!--				<a class="btn _tt-uc _fs-sm btn-white btn-block btn-lg" href="#">Xem thêm</a>-->
			</div>
		</div>
	</div>
</div>
