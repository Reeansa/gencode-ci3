<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/pages/head') ?>
</head>

<body>
	<!-- navbar -->
	<?php $this->load->view('_partials/pages/navbar') ?>

	<!-- header -->
	<?php $this->load->view('_partials/pages/header') ?>

	<!-- shop -->
	<section class="search_cont">
		<input type="text" placeholder="Search Field" class="searchInput Fill" id="searchInput" />
	</section>
	<section class="container-fluid">
		<div class="row ">
			<div class="col-md-3">
				<div class="filter_section">
					<div class="Btn">
						<button name="reset" onclick="myFunction()" id="reset">Reset</button>
					</div>
					<div class="accordion" id="accordionPanelsStayOpenExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="panelsStayOpen-headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
									Categories
								</button>
							</h2>
							<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
								<div class="accordion-body">
									<div class="fil_cont">
										<div>
											<input type="checkbox" id="shoes" value="shoes" class="Fill check" placeholder="shoes" />
											<label for="shoes"> shoes</label>
										</div>
										<div>
											<input type="checkbox" id="shirt" value="shirt" class="Fill check check" placeholder="shirts" />
											<label for="shirt">shirt</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="panelsStayOpen-headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
									Rating
								</button>
							</h2>
							<div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
								<div class="accordion-body">
									<div>
										<input type="checkbox" id="1" class="Fill check" value="1" />
										<label for="1">
											<i class="fa-solid fa-star active_star"></i>
											<i class="fa-regular fa-star Normal_star"></i>
											<i class="fa-regular fa-star Normal_star"></i>
											<i class="fa-regular fa-star Normal_star"></i>
											<i class="fa-regular fa-star Normal_star"></i>
										</label>
									</div>
									<div>
										<input type="checkbox" id="2" class="Fill check" value="2" />
										<label for="2">
											<i class="fa-solid fa-star active_star"></i>
											<i class="fa-solid fa-star active_star"></i>
											<i class="fa-regular fa-star Normal_star"></i>
											<i class="fa-regular fa-star Normal_star"></i>
											<i class="fa-regular fa-star Normal_star"></i>
										</label>
									</div>
									<div>
										<input type="checkbox" id="3" class="Fill check" value="3" />
										<label for="3">
											<i class="fa-solid fa-star active_star"></i>
											<i class="fa-solid fa-star active_star"></i>
											<i class="fa-solid fa-star active_star"></i>
											<i class="fa-regular fa-star Normal_star"></i>
											<i class="fa-regular fa-star Normal_star"></i>
										</label>
									</div>
									<div>
										<input type="checkbox" id="4" class="Fill check" value="4" />
										<label for="4">
											<i class="fa-solid fa-star active_star"></i>
											<i class="fa-solid fa-star active_star"></i>
											<i class="fa-solid fa-star active_star"></i>
											<i class="fa-solid fa-star active_star"></i>
											<i class="fa-regular fa-star Normal_star"></i>
										</label>
									</div>
									<div>
										<input type="checkbox" id="5" class="Fill check" value="5" />
										<label for="5">
											<i class="fa-solid fa-star active_star"></i>
											<i class="fa-solid fa-star active_star"></i>
											<i class="fa-solid fa-star active_star"></i>
											<i class="fa-solid fa-star active_star"></i>
											<i class="fa-solid fa-star active_star"></i>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="panelsStayOpen-headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
									Price
								</button>
							</h2>
							<div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
								<div class="accordion-body">
									<label for="customRange2" class="form-label">Example range</label>
									<input type="range" class="form-range Fill check" min="0" value="100" max="100" id="Range" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row " id="productsContainer">
				</div>
			</div>
		</div>
		</div>
	</section>
	<section class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-2">
				<nav aria-label="Page navigation example" class="pagenation_nav">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" id="btn_prev" onclick="prevPage(e)" href="/">&lt;</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" id="btn_next" onclick="nextPage(e)" href="/">&gt;</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</section>
	<!-- end shop -->

	<?php $this->load->view('_partials/pages/footer') ?>
</body>

</html>
