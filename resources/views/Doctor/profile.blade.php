@extends('Doctor.Headerfooter')

@section('content')
<style>
body {
    background:rgb(248, 248, 248);
    min-height: 100vh;
}
.profile-fullpage-container {
    width: 100%;
    min-height: calc(100vh - 60px); /* adjust if your header is taller */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-start;
    align-items: stretch;
   
}
.profile-main-card {
    background: linear-gradient(135deg, #e6f9f0 0%, #c3f5e6 60%, #f8f9fa 100%);
    border-radius: 20px;
     box-shadow: 0 8px 32px rgba(67,233,123,0.10), 0 1.5px 0 #43e97b22 inset;
    padding: 0 5vw;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: calc(100vh - 60px);
    width: 100%;
    margin: 0;
    position: relative;
    justify-content: center;
    
}
.profile-avatar-big {
    width: 260px;
    height: 260px;
    border-radius: 50%;
    background: #f8f9fa;
    margin-bottom: 24px;
    box-shadow: 0 2px 32px rgba(67,233,123,0.13);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    border: 6px solid #43e97b;
    margin-top: 10px;
    
}
.profile-avatar-big img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
}
.profile-main-card h2 {
    font-size: 3em;
    font-weight: 800;
    margin-bottom: 10px;
    color: #232733;
    text-align: center;
    letter-spacing: 1px;
}
.profile-main-card .role-badge {
    background: #43e97b;
    color: #fff;
    font-size: 1.4em;
    padding: 9px 38px;
    border-radius: 20px;
    margin-bottom: 24px;
    font-weight: 700;
    letter-spacing: 1px;
    display: inline-block;
}
.profile-main-card .social-icons {
    margin: 24px 0 0 0;
    display: flex;
    gap: 32px;
}
.profile-main-card .social-icons a {
    color: #fff;
    font-size: 2.2em;
    transition: color 0.2s;
}
.profile-main-card .social-icons a:hover {
    color: #43e97b;
}
.profile-info-grid {
    width: 100%;
    margin-top: 56px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 56px;
}
.profile-info-section {
     background: linear-gradient(120deg, #f8f9fa 60%, #e6f9f0 100%);
    border-radius: 12px;
   box-shadow: 0 2px 12px rgba(67,233,123,0.07);
    border: 1.5px solid #43e97b;
    padding: 0 2vw;
    box-shadow: none;
   
}
.profile-info-section h3 {
    color: #43e97b;
    font-size: 1.4em;
    font-weight: 700;
    margin-bottom: 28px;
    margin-top: 20px;
}
.profile-info-section dl {
    display: grid;
    grid-template-columns: 160px 1fr;
    row-gap: 12px;
    column-gap: 18px;
    margin-bottom: 24px;
}
.profile-info-section dt {
    color: #232733;
    font-weight: 600;
    font-size: 1.12em;
    margin: 0;
    text-align: left;
    /* Remove float, width, clear, margin-bottom */
}
.profile-info-section dd {
    color: #555;
    font-weight: 500;
    font-size: 1.12em;
    margin: 0;
    text-align: left;
    /* Remove margin-left, margin-bottom */
}
.profile-info-section .badge {
    background: #fff;
    color: #43e97b;
    border: 1px solid #43e97b;
    border-radius: 14px;
    padding: 8px 22px;
    font-size: 1.08em;
    margin-right: 12px;
}
.profile-info-section .availability {
    color: #43e97b;
    font-weight: 700;
    margin-left: 8px;
}
.profile-info-section .tags {
    margin-top: 18px;
}
.profile-info-section .tags .badge {
    background: #e6f9f0;
    color: #43e97b;
    border: 1px solid #43e97b;
    margin-bottom: 10px;
}
.edit-profile-btn {
    position: absolute;
    top: 40px;
    right: 56px;
    background: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%);
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 54px;
    height: 54px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background 0.2s, color 0.2s;
    z-index: 2;
    font-size: 1.5em;
}
.edit-profile-btn:hover {
    background: linear-gradient(90deg, #38f9d7 0%, #43e97b 100%);
    color: #fff;
}
.edit-modal-bg {
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(40,60,80,0.45);
    backdrop-filter: blur(6px);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    animation: fadeInBg 0.5s;
}
@keyframes fadeInBg {
    from { opacity: 0; }
    to { opacity: 1; }
}
.edit-modal {
    background: #fff;
    color: #232733;
    border: 1px solid #43e97b;
    border-radius: 28px;
    box-shadow: 0 8px 32px 0 rgba(31,38,135,0.18);
    padding: 48px 40px 40px 40px;
    min-width: 400px;
    max-width: 98vw;
    animation: popIn 0.5s cubic-bezier(.77,0,.18,1);
    position: relative;
}
@keyframes popIn {
    from { transform: scale(0.85) translateY(40px); opacity: 0; }
    to { transform: scale(1) translateY(0); opacity: 1; }
}
.close-modal-btn {
    position: absolute;
    top: 18px;
    right: 22px;
    background: none;
    border: none;
    font-size: 2em;
    color: #43e97b;
    cursor: pointer;
    transition: color 0.2s;
    z-index: 2;
}
.close-modal-btn:hover {
    color: #007bff;
}
.form-label {
    color: #43e97b;
}
.form-control {
    background: #f8f9fa;
    border: 1px solid #43e97b;
    color: #232733;
    border-radius: 10px;
    margin-bottom: 22px;
    font-size: 1.1em;
    padding: 12px 16px;
}
.form-control:focus {
    border-color: #43e97b;
    background: #fff;
    color: #232733;
}
.save-btn {
    background: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%);
    color: #fff;
    border: none;
    border-radius: 18px;
    padding: 14px 44px;
    font-weight: 700;
    font-size: 1.15em;
    margin-top: 8px;
    box-shadow: 0 2px 8px rgba(67,233,123,0.12);
    transition: background 0.2s, box-shadow 0.2s;
}
.save-btn:hover {
    background: linear-gradient(90deg, #38f9d7 0%, #43e97b 100%);
    color: #fff;
}
@media (max-width: 1300px) {
    .profile-main-card, .profile-info-section {
        padding: 0 2vw;
    }
    .profile-info-grid {
        grid-template-columns: 1fr;
        gap: 24px;
    }
    .edit-profile-btn {
        right: 16px;
        top: 16px;
    }
}
@media (max-width: 700px) {
    .profile-info-section dl,
    .profile-info-section dt,
    .profile-info-section dd {
        display: block;
        float: none;
        width: 100%;
        margin: 0 0 8px 0;
        text-align: left;
    }
    .profile-info-section dt {
        font-weight: 700;
        color: #43e97b;
        margin-bottom: 2px;
        font-size: 1em;
    }
    .profile-info-section dd {
        margin-left: 0;
        color: #555;   /* <-- Use your normal text color */
        font-size: 0.98em;
        margin-bottom: 12px;
        word-break: break-all;
    }
}
</style>

<div class="profile-fullpage-container">
    <div class="profile-main-card">
        <button class="edit-profile-btn" title="Edit Profile" onclick="document.getElementById('edit-modal-bg').style.display='flex'">
            <i class="fa fa-pen"></i>
        </button>
        <div class="profile-avatar-big">
            <img src="https://ui-avatars.com/api/?name={{ urlencode($doctor->name) }}&background=232733&color=43e97b&size=260" alt="Doctor Avatar">
        </div>
        <h2>{{ $doctor->name }}</h2>
        <div class="role-badge">Doctor</div>
       
        <div class="profile-info-grid ">
            <div class="profile-info-section  ">
                <h3>Bio &amp; Other Details</h3>
                <dl>
                    <dt>Email:</dt>
                    <dd>{{ $doctor->email }}</dd>
                    <dt>Phone:</dt>
                    <dd>{{ $doctor->phone ?? 'Not Provided' }}</dd>
                    <dt>Specialization:</dt>
                    <dd>{{ $doctor->specialization ?? 'Not Provided' }}</dd>
                    <dt>Experience:</dt>
                    <dd>{{ $doctor->experience ?? 'Not Provided' }}</dd>
                    <dt>Availability:</dt>
                    <dd><span class="availability">Available for Consultation</span></dd>
                </dl>
            </div>
            <div class="profile-info-section">
                <h3>Badges &amp; Tags</h3>
                <div style="margin-bottom:18px;">
                    <span class="badge">Top Doctor</span>
                    <span class="badge">Verified</span>
                </div>
                <h3 style="margin-top:0;">Tags</h3>
                <div class="tags">
                    <span class="badge">#Health</span>
                    <span class="badge">#Consultation</span>
                    <span class="badge">#Doctor</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Profile Modal -->
<div id="edit-modal-bg" class="edit-modal-bg" style="display:none;">
    <div class="edit-modal">
        <button type="button" class="close-modal-btn" onclick="document.getElementById('edit-modal-bg').style.display='none'">&times;</button>
        <h3 class="mb-4" style="color:#43e97b;">Edit Profile</h3>
        <form method="POST" action="{{ route('doctor.profile.update') }}">
            @csrf
            <label class="form-label">Name</label>
            <input type="text" name="name" value="{{ old('name', $doctor->name) }}" class="form-control" required>
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email', $doctor->email) }}" class="form-control" required>
            <label class="form-label">Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $doctor->phone) }}" class="form-control">
            <label class="form-label">Specialization</label>
            <input type="text" name="specialization" value="{{ old('specialization', $doctor->specialization) }}" class="form-control">
            <label class="form-label">Experience</label>
            <input type="text" name="experience" value="{{ old('experience', $doctor->experience) }}" class="form-control">
            <button type="submit" class="save-btn w-100">Save Changes</button>
        </form>
    </div>
</div>

<!-- FontAwesome CDN for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection