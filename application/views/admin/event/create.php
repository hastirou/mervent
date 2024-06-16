<section class="content">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Event</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

      <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Event</h3>
              </div>
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Title">
                  </div>

                  <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" class="form-control" id="Description" placeholder="Enter Description">
                  </div>
                  
                  <div class="form-group">
                    <label for="coverimage">Cover Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="coverimage">
                        <label class="custom-file-label" for="coverimage">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                  
                  <div class="form-group">
                        <label>Paragraph</label>
                        <textarea class="form-control" rows="3" placeholder="Enter Paragraph"></textarea>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Upload</button>
                </div>
              </form>
            </div>
      </div>
</section>
<!-- /.card -->