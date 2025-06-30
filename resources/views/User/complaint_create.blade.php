<x-app-layout>
        <style>
        body {
            background: linear-gradient(to right, #2c3e50, #4ca1af);
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
        }

        .complaint-container {
            max-width: 700px;
            margin: 50px auto;
            background-color: #1e1e2f;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
        }

        .complaint-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ff4d4d;
        }

        label {
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-control {
            border-radius: 10px;
            border: none;
            padding: 12px 15px;
            background-color:rgb(80, 14, 14);
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 77, 77, 0.25);
        }

        .btn-submit {
            background-color: #ff4d4d;
            border: none;
            padding: 12px;
            border-radius: 10px;
            width: 100%;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #e04343;
        }

        .alert-success {
            background-color: #28a745;
            border: none;
            border-radius: 10px;
        }

        @media (max-width: 576px) {
            .complaint-container {
                margin: 20px 10px;
                padding: 20px;
            }
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('File a Complaint') }}
        </h2>
    </x-slot>

 <div class="complaint-container">
    <h2>📣 Submit a Complaint</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('complaint.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name">Your Name</label>
            <input type="text" name="name" class="form-control" required placeholder="Enter your full name">
        </div>

        <div class="mb-3">
            <label for="email">Your Email</label>
            <input type="email" name="email" class="form-control" required placeholder="Enter your email">
        </div>

        <div class="mb-3">
            <label for="message">Complaint Message</label>
            <textarea name="message" rows="5" class="form-control" required placeholder="Write your complaint here..."></textarea>
        </div>

        <button type="submit" class="btn btn-submit">Submit Complaint</button>
    </form>
</div>
</x-app-layout>
