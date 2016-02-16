<style>
.form-horizontal .control-label {
    text-align: inherit;
}
</style>
    <div class="page-header">
      <h1 class="page-title">Form Validation</h1>
    
    </div>
    <div class="page-content container-fluid">
      

      

      <!-- Panel Full Example -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Full Example
            <span class="panel-desc">Basic validation will display a label with the error after the form
              control. </span>
          </h3>
        </div>
        <div class="panel-body">

          <form id="exampleFullForm" autocomplete="off">
            <div class="row row-lg">
              <div class="col-lg-6 form-horizontal">
                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Username
                    <span class="required">*</span>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="username" placeholder="John Fish"
                    required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Email
                    <span class="required">*</span>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-envelope" aria-hidden="true"></i>
                      </span>
                      <input type="email" class="form-control" name="email" placeholder="email@email.com"
                      required="">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Password
                    <span class="required">*</span>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-lock" aria-hidden="true"></i>
                      </span>
                      <input type="password" class="form-control" name="password" placeholder="Min length 8"
                      required="">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Birthday
                    <span class="required">*</span>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="birthday" placeholder="YYYY/MM/DD"
                    required="" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">GitHub</label>
                  <div class="col-lg-12 col-sm-9">
                    <input type="url" class="form-control" name="github" placeholder="https://github.com/amazingSurge">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Company</label>
                  <div class="col-lg-12 col-sm-9">
                    <select class="form-control" id="company" name="company" required="">
                      <option value="">Choose a Company</option>
                      <option value="apple">Apple</option>
                      <option value="google">Google</option>
                      <option value="microsoft">Microsoft</option>
                      <option value="yahoo">Yahoo</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 form-horizontal">
                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Remark Admin is
                    <span class="required">*</span>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <div>
                        <div class="radio-custom radio-primary">
                          <input type="radio" id="inputAwesome" name="porto_is" value="awesome" required="">
                          <label for="inputAwesome">Awesome</label>
                        </div>
                      </div>
                      <div>
                        <div class="radio-custom radio-primary">
                          <input type="radio" id="inputVeryAwesome" name="porto_is" value="very-awesome">
                          <label for="inputVeryAwesome">Very Awesome</label>
                        </div>
                      </div>
                      <div>
                        <div class="radio-custom radio-primary">
                          <input type="radio" id="inputUltraAwesome" name="porto_is" value="ultra-awesome">
                          <label for="inputUltraAwesome">Ultra Awesome</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">I will use it for
                    <span class="required">*</span>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <div>
                        <div class="checkbox-custom checkbox-primary">
                          <input type="checkbox" id="inputForProject" name="for[]" value="project" required="">
                          <label for="inputForProject">My Project</label>
                        </div>
                      </div>
                      <div>
                        <div class="checkbox-custom checkbox-primary">
                          <input type="checkbox" id="inputForWebsite" name="for[]" value="website">
                          <label for="inputForWebsite">My Website</label>
                        </div>
                      </div>
                      <div>
                        <div class="checkbox-custom checkbox-primary">
                          <input type="checkbox" id="inputForAll" name="for[]" value="all">
                          <label for="inputForAll">All things I do</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Skills
                    <span class="required">*</span>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <textarea class="form-control" name="skills" rows="3" placeholder="Describe your skills"
                    required=""></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Browsers</label>
                  <div class="col-lg-12 col-sm-9">
                    <select class="form-control" id="browsers" name="browsers" title="Please select at least one browser"
                    size="5" multiple="multiple" required="">
                      <option value="chrome">Chrome / Safari</option>
                      <option value="ff">Firefox</option>
                      <option value="ie">Internet Explorer</option>
                      <option value="opera">Opera</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group col-lg-12 text-right padding-top-m">
                <button type="submit" class="btn btn-primary" id="validateButton1">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- End Panel Full Example -->

   
    </div>
