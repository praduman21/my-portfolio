@extends('layouts.app')

@section('styles')
<style>
    .custom-hover {
        position: relative;
        transition: color 0.3s ease, opacity 0.3s ease;
        padding-bottom: 5px;
    }
    
    .custom-hover:hover {
        opacity: 1 !important;
        color: #00f2fe !important;
    }

    /* The Invisible Line */
    .custom-hover::after {
        content: '';
        position: absolute;
        width: 0;           
        height: 3px;       
        bottom: 0;
        left: 50%;          
        transform: translateX(-50%);
        background: linear-gradient(90deg, #0d6efd, #00f2fe); 
        transition: width 0.3s ease-in-out; 
        border-radius: 2px;
    }

    .custom-hover:hover::after {
        width: 100%;
    }
    
    /* Gradient text effect for that futuristic tech vibe */
    /* .text-gradient {
        background: linear-gradient(90deg, #0d6efd, #00f2fe);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    } */
    
    /* Navbar link hover effect */
    /* .custom-hover:hover {
        opacity: 1 !important;
        color: #00f2fe !important;
        transition: 0.3s ease;
    } */
</style>
@endsection

@section('content')
    
    @include('sections.hero')
    @include('sections.about')
    @include('sections.skills')
    @include('sections.experience')
    @include('sections.projects')
    @include('sections.contact')

@endsection