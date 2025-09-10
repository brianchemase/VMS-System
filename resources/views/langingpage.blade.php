<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Brigade Registration</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="bg-light min-vh-100">
  <div class="container py-5">
    <!-- Header -->
    <div class="text-center mb-5">
      <div class="d-flex justify-content-center align-items-center mb-3">
        <svg class="me-3" style="height: 48px; width: 48px; color: 008000
        ;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
        </svg>
        <h1 class="h1 fw-bold text-dark">Brigade Registration</h1>
      </div>
      <p class="text-muted fs-5">Complete your registration to join the brigade</p>
    </div>

    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#198754'
        });
    </script>
    @endif

    @if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            html: `{!! implode('<br>', $errors->all()) !!}`,
            confirmButtonColor: '#dc3545'
        });
    </script>
    @endif

    <form class="row g-4" method="POST" action="{{ route('member.store') }}">
      @csrf
      <!-- Personal Information -->
      <div class="card mb-4">
        <div class="card-header bg-success text-white">
          <h5 class="card-title mb-0">
            <svg class="me-2" style="height: 20px; width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
            Personal Information
          </h5>
          <p class="mb-0 small">Enter your basic personal details</p>
        </div>
        <div class="card-body row g-3">
          <div class="col-md-6">
            <label for="name" class="form-label">Full Name *</label>
            <input id="name" name="name" type="text"  value="{{ old('name') }}" class="form-control" required placeholder="Enter your full name" />
          </div>
          <div class="col-md-6">
            <label for="idNo" class="form-label">ID Number *</label>
            <input id="idNo" name="idNo" type="text"  value="{{ old('idNo') }}" class="form-control" required placeholder="Enter your ID number" />
          </div>
          <div class="col-md-6">
            <label for="dob" class="form-label">Date of Birth *</label>
            <input id="dob" name="dob" type="date" value="{{ old('dob') }}" class="form-control" required />
          </div>
          <div class="col-md-6">
            <label for="gender" class="form-label">Gender</label>
            <select id="gender" name="gender" class="form-select">
              <option value="">Select gender</option>
                <option value="male" {{ old('gender')=='male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender')=='female' ? 'selected' : '' }}>Female</option>              
            </select>
          </div>
          <div class="col-md-6">
            <label for="phone" class="form-label">Phone Number *</label>
            <input id="phone" name="phone" type="text" value="{{ old('phone') }}" class="form-control" required placeholder="Enter your phone number" />
          </div>
          <div class="col-md-6">
            <label for="dateOfJoining" class="form-label">Date of Joining</label>
            <input id="dateOfJoining" name="dateOfJoining" type="date" value="{{ old('dateOfJoining') }}" class="form-control" />
          </div>
        </div>
      </div>

      <!-- Regional Location -->
      <div class="card mb-4">
        <div class="card-header bg-success text-white">
          <h5 class="card-title mb-0">
            <svg class="me-2" style="height: 20px; width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            Regional Location
          </h5>
          <p class="mb-0 small">Select your regional assignment details</p>
        </div>

           <div class="card-body row g-3">
          <div class="col-md-6">
            <label for="region" class="form-label">Region *</label>
            <select id="region" name="region" class="form-select" required>
              <option value="">Select region</option>
              <option value="Central">Open</option>
              <option value="Eastern">Closed</option>
        
            </select>
          </div>
        <div class="col-md-6">
                <label for="county" class="form-label">County *</label>
                <select id="county" name="county" class="form-select">
                  <option value="">Select county</option>
                  <option value="Nairobi North">Nairobi North</option>
                  <option value="Nairobi South"> Nairobi South</option>
                  <option value="Nairobi East">Nairobi East</option>
                  <option value="Nairobi West">Nairobi West</option>
                  <option value="Nairobi Central">Nairobi Central</option>
                  <option value="Nairobi Kajiado">Nairobi Kajiado</option>
                  <option value="Railways Region">Railways</option>
                  <option value="Kenya Prisons Region">Kenya Prisons</option>
                  <option value="Kengen Region">Kengen</option>
                  <option value="National Police service Region">National Police service</option>
                  <option value="Kenya Ports Authority Region">Kenya Ports Authority</option>
                  <option value="Sarova Hotel">Sarova Hotel</option>
                  <option value="Baringo">Baringo</option>
                  <option value="Bomet">Bomet</option>
                  <option value="Bungoma">Bungoma</option>
                  <option value="Busia">Busia</option>
                  <option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option>
                  <option value="Embu">Embu</option>
                  <option value="Garissa">Garissa</option>
                  <option value="Homa Bay">Homa Bay</option>
                  <option value="Isiolo">Isiolo</option>
                  <option value="Kajiado">Kajiado</option>
                  <option value="Kakamega">Kakamega</option>
                  <option value="Kericho">Kericho</option>
                  <option value="Kiambu">Kiambu</option>
                  <option value="Kilifi">Kilifi</option>
                  <option value="Kirinyaga">Kirinyaga</option>
                  <option value="Kisii">Kisii</option>
                  <option value="Kisumu">Kisumu</option>
                  <option value="Kitui">Kitui</option>
                  <option value="Kwale">Kwale</option>
                  <option value="Laikipia">Laikipia</option>
                  <option value="Lamu">Lamu</option>
                  <option value="Machakos">Machakos</option>
                  <option value="Makueni">Makueni</option>
                  <option value="Mandera">Mandera</option>
                  <option value="Marsabit">Marsabit</option>
                  <option value="Meru">Meru</option>
                  <option value="Migori">Migori</option>
                  <option value="Mombasa">Mombasa</option>
                  <option value="Murang'a">Murang'a</option>
                  <option value="Nairobi">Nairobi</option>
                  <option value="Nakuru">Nakuru</option>
                  <option value="Nandi">Nandi</option>
                  <option value="Narok">Narok</option>
                  <option value="Nyamira">Nyamira</option>
                  <option value="Nyandarua">Nyandarua</option>
                  <option value="Nyeri">Nyeri</option>
                  <option value="Samburu">Samburu</option>
                  <option value="Siaya">Siaya</option>
                  <option value="Taita-Taveta">Taita-Taveta</option>
                  <option value="Tana River">Tana River</option>
                  <option value="Tharaka-Nithi">Tharaka-Nithi</option>
                  <option value="Trans Nzoia">Trans Nzoia</option>
                  <option value="Turkana">Turkana</option>
                  <option value="Uasin Gishu">Uasin Gishu</option>
                  <option value="Vihiga">Vihiga</option>
                  <option value="Wajir">Wajir</option>
                  <option value="West Pokot">West Pokot</option>
                </select>
              </div>
              <div class="col-md-6">
            <label for="corp" class="form-label">Corp</label>
            <input type="text" id="corp" name="corp" value="{{ old('corp') }}" class="form-control" placeholder="Enter corps name, region, and county (e.g. South Central Nairobi)">
          </div>

          <div class="col-md-6">
            <label for="division" class="form-label">Division</label>
            <input type="text" id="division" name="division" class="form-control" value="{{ old('division') }}" placeholder="Enter division (e.g. 1st Division)">
          </div>

     
        </div>
      </div>

      <!-- Membership Information -->
      <div class="card mb-4">
        <div class="card-header bg-success text-white">
          <h5 class="card-title mb-0">
            <svg class="me-2" style="height: 20px; width: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
            </svg>
            Membership Information
          </h5>
          <p class="mb-0 small">Provide your membership and service details</p>
        </div>
        <div class="card-body row g-3">
            <div class="col-md-6">
              <label for="rank" class="form-label">Rank *</label>
              <select id="rank" name="rank" class="form-select" required>
                      <option value="">Select rank</option>
                      <option value="Corpral">Corpral</option>
                      <option value="Sergeant "> Sergeant </option>      
                      <option value="Divisional Officer(V)">Divisional Officer(V)</option>
                      <option value="Divisional Superintendent">Divisional Superintendent </option>
                      <option value="Corp Staff Officer">Corp Staff Officer</option>                
                      <option value="Corp Sergeant Major">Corp Sergeant Major</option>
                      <option value="Corp Surgeon">Corp Surgeon</option>
                      <option value="Corp Nurse Officer">Corp Nurse Officer</option>
                      <option value="Corp Superintendent">Corp Superintendent</option>
                      <option value="County Staff Officer">County Staff Officer</option>                    
                      <option value="County Surgeon ">County Surgeon</option>                    
                      <option value="County Nursing Officer">County Nursing Officer </option>
                      <option value="County Sergeant Major">County Sergeant Major </option>
                      <option value="County Commissioner">County Commissioner</option>
                      <option value="Regional Staff Officer"> Regional Staff Officer </option>                       
                      <option value="Regional Surgeon ">Regional Surgeon</option>
                      <option value="Regional Nursing Officer">Regional Nursing Officer</option>
                      <option value="Regional Volunteer Coodinator">Regional Volunteer Coodinator</option>
                      <option value="Regional Sergeant Major">Regional Sergeant Major </option>
                      <option value="Regional Commissioner">Regional Commissioner</option>
                      <option value="National Staff Officer"> National Staff Officer </option>
                      <option value="National Volunteer Coodinator"> National Volunteer Coodinator </option>
                      <option value="National Commissioner"> National Commissioner </option>
                      <option value="National Sergeant Major"> National Sergeant Major </option> 
                      <option value="National Surgeon">National Surgeon</option>
                      <option value="Principal Nursing Officer"> Principal Nursing Officer </option>
                      <option value="Hospitaller">Hospitaller</option>
                      <option value="Chancellor">Chancellor</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="memberNumber" class="form-label">Member Number</label>
              <input id="memberNumber" name="memberNumber" type="text" class="form-control" placeholder="Enter member number" />
            </div>
            <div class="col-md-6">
                  <label for="countyOfResidence" class="form-label">County of Residence</label>
                  <select id="countyOfResidence" name="countyOfResidence" class="form-select">
                        <option value="">Select county of residence</option>
                        <option value="Baringo">Baringo</option>
                        <option value="Bomet">Bomet</option>
                        <option value="Bungoma">Bungoma</option>
                        <option value="Busia">Busia</option>
                        <option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option>
                        <option value="Embu">Embu</option>
                        <option value="Garissa">Garissa</option>
                        <option value="Homa Bay">Homa Bay</option>
                        <option value="Isiolo">Isiolo</option>
                        <option value="Kajiado">Kajiado</option>
                        <option value="Kakamega">Kakamega</option>
                        <option value="Kericho">Kericho</option>
                        <option value="Kiambu">Kiambu</option>
                        <option value="Kilifi">Kilifi</option>
                        <option value="Kirinyaga">Kirinyaga</option>
                        <option value="Kisii">Kisii</option>
                        <option value="Kisumu">Kisumu</option>
                        <option value="Kitui">Kitui</option>
                        <option value="Kwale">Kwale</option>
                        <option value="Laikipia">Laikipia</option>
                        <option value="Lamu">Lamu</option>
                        <option value="Machakos">Machakos</option>
                        <option value="Makueni">Makueni</option>
                        <option value="Mandera">Mandera</option>
                        <option value="Marsabit">Marsabit</option>
                        <option value="Meru">Meru</option>
                        <option value="Migori">Migori</option>
                        <option value="Mombasa">Mombasa</option>
                        <option value="Murang'a">Murang'a</option>
                        <option value="Nairobi">Nairobi</option>
                        <option value="Nakuru">Nakuru</option>
                        <option value="Nandi">Nandi</option>
                        <option value="Narok">Narok</option>
                        <option value="Nyamira">Nyamira</option>
                        <option value="Nyandarua">Nyandarua</option>
                        <option value="Nyeri">Nyeri</option>
                        <option value="Samburu">Samburu</option>
                        <option value="Siaya">Siaya</option>
                        <option value="Taita-Taveta">Taita-Taveta</option>
                        <option value="Tana River">Tana River</option>
                        <option value="Tharaka-Nithi">Tharaka-Nithi</option>
                        <option value="Trans Nzoia">Trans Nzoia</option>
                        <option value="Turkana">Turkana</option>
                        <option value="Uasin Gishu">Uasin Gishu</option>
                        <option value="Vihiga">Vihiga</option>
                        <option value="Wajir">Wajir</option>
                        <option value="West Pokot">West Pokot</option>
                      </select>
            </div>

          <div class="col-md-6">
            <label for="membership" class="form-label">Membership Type</label>
            <select id="membership" name="membership" class="form-select">
              <option value="">Select membership type</option>
               <option value="Dolphin">Dolphin</option>
                                    <option value="Cadet">Cadet</option>
                                    <option value="Adult">Adult</option>
                                    <option value="Link">Link</option>
                                    <option value="Fellowship">Fellowship</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="bloodGroup" class="form-label">Blood Group</label>
            <select id="bloodGroup" name="bloodGroup" class="form-select">
              <option value="">Select blood group</option>
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Submit -->
      <div class="text-center">
        <button type="submit" class="btn btn-success btn-lg px-5">
          Submit Registration
        </button>
      </div>
    </form>
  </div>

  <script>
    function handleSubmit(event) {
      event.preventDefault();
      const formData = new FormData(event.target);
      const data = Object.fromEntries(formData.entries());
      const requiredFields = ['name', 'dob', 'phone', 'idNo', 'region', 'rank'];
      const missingFields = requiredFields.filter(field => !data[field]);
      if (missingFields.length > 0) {
        alert('Please fill in all required fields.');
        return;
      }
      alert('Registration submitted successfully!');
      console.log('Form Data:', data);
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
