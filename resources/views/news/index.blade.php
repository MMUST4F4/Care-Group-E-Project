 
@extends('userheaderdooter')
@section('usercontent')

<div class="container">
    <h2>All News</h2>
   
    <!-- <a href="{{ route('news.create') }}" class="btn btn-success mb-3">Add News</a> -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->author }}</td>
                <td>{{ $item->created_at ? $item->created_at->format('F d, Y') : '' }}</td>
                <td>
                    <a href="{{ route('news.show', $item->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('news.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <!-- You can add delete button here if needed -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection