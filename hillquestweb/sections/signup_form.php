<!-- signup_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/@webpixels/css@1.2.6/dist/index.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>


  
    <div class="bg-surface-secondary">
    <h1 class="text-center">Create a New Account</h1>
  <div class="container py-10">
    <div class="row mb-10">
      <div class="col-lg-4 mb-5 mb-lg-0 pe-lg-16">
        <h4 class="font-semibold mb-2">Profile</h4>
        <p class="text-sm">By filling your data you get a much better experience using our website.</p>
      </div>
      <div class="col-lg-8">
        <div class="card shadow border-0">
          <div class="card-body">
            <div class="row g-5">
              <div class="col-md-6">
                <div class="">
                  <label class="form-label" for="first_name">First name</label>
                  <input type="text" class="form-control" id="first_name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="">
                  <label class="form-label" for="last_name">Last name</label>
                  <input type="text" class="form-control" id="last_name">
                </div>
              </div>
              <div class="col-md-12">
                <div class="">
                  <label class="form-label" for="formInputExample">Bio</label>
                  <textarea class="form-control" id="formInputExample" placeholder="Your email" rows="3"></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="">
                  <div class="input-group position-relative">
                    <span class="input-group-text" id="">clever.com/</span>
                    <input type="email" class="form-control" placeholder="username" aria-label="username" aria-describedby="">
                    <span class="input-group-text" id="">.com</span>
                  </div>
                  <span class="mt-2 valid-feedback">Looks good!</span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="">
                  <label class="form-label" for="formInputExample">Photo</label>
                  <div class="d-flex align-items-center">
                    <a href="#" class="avatar avatar-lg bg-warning rounded-circle text-white">
                      <img alt="..." src="https://images.unsplash.com/photo-1579463148228-138296ac3b98?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80">
                    </a>
                    <div class="ms-5">
                      <label for="file_upload" class="btn btn-sm btn-neutral">
                        <span>Upload</span>
                        <input type="file" name="file_upload" id="file_upload" class="visually-hidden">
                      </label>
                      <a href="#" class="btn d-inline-flex btn-sm btn-neutral ms-2 text-danger">
                        <span class=" pe-2">
                          <i class="bi bi-trash"></i>
                        </span>
                        <span>Remove</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="">
                  <label class="form-label" for="formInputExample">Cover</label>
                  <div class="card shadow-none border-2 border-dashed border-primary-hover position-relative">
                    <div class="d-flex justify-content-center px-5 py-5">
                      <label for="file_upload" class="position-absolute w-full h-full top-0 start-0 cursor-pointer">
                        <input id="file_upload" name="file_upload" type="file" class="visually-hidden">
                      </label>
                      <div class="text-center">
                        <div class="text-2xl text-muted">
                          <i class="bi bi-upload"></i>
                        </div>
                        <div class="d-flex text-sm mt-3">
                          <p class="font-semibold">Upload a file or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">
                          PNG, JPG, GIF up to 3MB
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="">
                  <label class="form-label" for="formInputExample">Website</label>
                  <input type="text" class="form-control" id="formInputExample">
                </div>
              </div>
              <div class="col-12">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" name="switch_make_public" id="switch_make_public">
                  <label class="form-check-label ms-2" for="switch_make_public">
                    Make my profile public
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-end py-4">
            <button type="button" class="btn btn-sm btn-neutral me-2">Cancel</button>
            <button type="submit" class="btn btn-sm btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-10">
      <div class="col-lg-4 mb-5 mb-lg-0 pe-lg-16">
        <h4 class="font-semibold mb-2">Contact information</h4>
        <p class="text-sm">By filling your data you get a much better experience using our website.</p>
      </div>
      <div class="col-lg-8">
        <div class="card shadow border-0">
          <div class="card-body">
            <div class="row g-5">
              <div class="col-md-6">
                <div class="">
                  <label class="form-label" for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Your email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="">
                  <label class="form-label" for="phone_number">Phone number</label>
                  <input type="tel" class="form-control" id="phone_number" placeholder="Your email">
                </div>
              </div>
              <div class="col-12">
                <div class="">
                  <label class="form-label" for="address">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Your email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="">
                  <label class="form-label" for="city">City</label>
                  <input type="text" class="form-control" id="city" placeholder="Your email">
                </div>
              </div>
              <div class="col-md-4">
                <div class="">
                  <label class="form-label" for="country">Country</label>
                  <select class="form-select" id="country" placeholder="Your email" aria-label="Default select example">
                    <option selected>Country</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="">
                  <label class="form-label" for="zip">ZIP</label>
                  <input type="tel" class="form-control" id="zip" placeholder="Your email">
                </div>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="check_primary_address" id="check_primary_address">
                  <label class="form-check-label" for="check_primary_address">
                    Make this my default address
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-end py-4">
            <button type="button" class="btn btn-sm btn-neutral me-2">Cancel</button>
            <button type="submit" class="btn btn-sm btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0 pe-lg-16">
        <h4 class="font-semibold mb-2">Notifications</h4>
        <p class="text-sm">By filling your data you get a much better experience using our website.</p>
      </div>
      <div class="col-lg-8">
        <div class="card shadow border-0">
          <div class="card-body">
            <div class="mb-10">
              <h4 class="font-semibold mb-5">Email</h4>
              <div class="d-flex mb-5">
                <div class="me-3">
                  <input class="form-check-input" type="checkbox" name="check_notification_1" id="check_notification_1">
                </div>
                <div>
                  <label class="form-label mb-0" for="check_notification_1">
                    Account Activity
                  </label>
                  <p class="text-sm text-muted">
                    Get important notifications about you or activity you&#39;ve missed
                  </p>
                </div>
              </div>
              <div class="d-flex mb-5">
                <div class="me-3">
                  <input class="form-check-input" type="checkbox" name="check_notification_2" id="check_notification_2">
                </div>
                <div>
                  <label class="form-label mb-0" for="check_notification_2">
                    Communications
                  </label>
                  <p class="text-sm text-muted">
                    Get important notifications about you or activity you&#39;ve missed
                  </p>
                </div>
              </div>
              <div class="d-flex mb-5">
                <div class="me-3">
                  <input class="form-check-input" type="checkbox" name="check_notification_3" id="check_notification_3">
                </div>
                <div>
                  <label class="form-label mb-0" for="check_notification_3">
                    Meetups near you
                  </label>
                  <p class="text-sm text-muted">
                    Get important notifications about you or activity you&#39;ve missed
                  </p>
                </div>
              </div>
            </div>
            <div>
              <h4 class="font-semibold">Push Notifications</h4>
              <p class="text-sm text-muted mb-5">By filling your data you get a much better experience using our website.</p>
              <div class="d-flex mb-3">
                <div class="me-3">
                  <input class="form-check-input" type="radio" name="radio_notifications" id="radio_notification_1">
                </div>
                <div>
                  <label class="form-label mb-0" for="radio_notification_1">
                    Everything
                  </label>
                </div>
              </div>
              <div class="d-flex mb-3">
                <div class="me-3">
                  <input class="form-check-input" type="radio" name="radio_notifications" id="radio_notification_2">
                </div>
                <div>
                  <label class="form-label mb-0" for="radio_notification_2">
                    Only what&#39;s important
                  </label>
                </div>
              </div>
              <div class="d-flex">
                <div class="me-3">
                  <input class="form-check-input" type="radio" name="radio_notifications" id="radio_notification_3">
                </div>
                <div>
                  <label class="form-label mb-0" for="radio_notification_3">
                    No push notifications
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-end py-4">
            <button type="button" class="btn btn-sm btn-neutral me-2">Cancel</button>
            <button type="submit" class="btn btn-sm btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
