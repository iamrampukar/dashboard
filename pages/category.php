<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Category</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Category</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">CREATE <small>New Category Name</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                	<div class="form-group">
                		<label for="categoryNameNepali">Category Name <sub>[NEPALI]</sub></label>
                		<input type="text" name="categoryNameNepali" class="form-control form-control-sm is-invalid" placeholder="Enter category name Nepali">
                		<span class="error invalid-feedback">Please enter a email address</span>
                	</div>
                	<div class="form-group">
                		<label for="categoryNameEnglish">Category Name <sub>[ENGLISH]</sub></label>
                		<input type="text" name="categoryNameEnglish" class="form-control form-control-sm is-invalid" placeholder="Enter category name English">
                		<span class="error invalid-feedback">Please enter a email address</span>
                	</div>
                	<div class="form-group">
                		<label>Description</label>
                		<textarea class="form-control form-control-sm" rows="3" placeholder="Enter ..."></textarea>
                	</div>
                	<div class="form-group">
                		<label>Category Name</label>
                		<select class="form-control form-control-sm">
                			<option>option 1</option>
                			<option>option 2</option>
                			<option>option 3</option>
                			<option>option 4</option>
                			<option>option 5</option>
                		</select>
                	</div>
                	<div class="form-group">
                		<label>Publish Type</label>
                		<div class="form-check"></div>
                		<div class="form-check form-check-inline">
                			<input class="form-check-input" type="radio" name="radio1" checked="">
                			<label class="form-check-label">Publish</label>
                		</div>
                		<div class="form-check form-check-inline">
                			<input class="form-check-input" type="radio" name="radio1" checked="">
                			<label class="form-check-label">Unpublish</label>
                		</div>
                	</div>
                	<div class="form-group">
                		<label for="publishDate">Publish Date And Time</label>
                		<input type="text" class="form-control" id="publishDate" value="07/01/2017">
                	</div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>