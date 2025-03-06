@extends('layouts.app')

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/alpinejs" defer></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tabler@1.0.0/dist/css/tabler.min.css">
@endsection

@section('content')

<section class="about-section bg-overlay-base ptb-120 bg_img" data-background="{{ asset('T38.png') }}"
    style="background-image: url('{{ asset('T38.png') }}');">
    <div class="about-element">
        <img src="{{ asset('element-9.png') }}" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-xl-10">
                <div class="banner-content aos-init aos-animate" data-aos="fade-right" data-aos-duration="1800">
                    <h1 class="title text-white fw-bold">
                        Commands
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Commands</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-xl mt-5" x-data="{
    request_in_progress: false,
    command_to_run: '',
    command_output: '',
    request_completed: false,

    async execute_command(command) {
        this.command_to_run = command;
        this.request_in_progress = true;
        this.command_output = '';

        try {
            const response = await axios.post('{{ route('commands.execute') }}', {
                command: command
            });

            this.command_output = response.data.output;
            this.request_completed = true;
            this.request_in_progress = false;

            Swal.fire({
                title: response.data.code === 200 ? 'Success' : 'Error',
                text: response.data.code === 200 
                    ? 'Command executed successfully! Check output below.' 
                    : response.data.error,
                icon: response.data.code === 200 ? 'success' : 'error',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });

        } catch (error) {
            console.error(error);
            this.request_in_progress = false;
            this.request_completed = true;
            this.command_output = 'Something went wrong!';

            Swal.fire({
                title: 'Error',
                text: 'Something went wrong!',
                icon: 'error'
            });
        }
    }
}">
    <div class="row ptb-60">
        <div class="col-md-7 p-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Available Commands</h3>
                </div>
                <div class="card-body">
                    <template x-if="request_completed">
                        <div class="alert alert-success">
                            <strong>Command "<span x-text="command_to_run"></span>" executed ✅</strong>
                        </div>
                    </template>

                    <div class="row g-2">
                        @foreach ($commands_list as $category => $commands)
                            <div class="col-12">
                                <h4 class="mt-3">{{ ucfirst($category) }}</h4>
                            </div>
                            @foreach ($commands as $value)
                                <div class="col-4 col-sm-3 col-md-4 col-lg-3">
                                    <button @click='execute_command("{{ $value }}")'
                                        :disabled="request_in_progress"
                                        class="btn btn-primary w-100">
                                        <span x-show="request_in_progress && command_to_run === '{{ $value }}'">
                                            <i class="fas fa-spinner fa-spin"></i>
                                        </span>
                                        {{ $value }}
                                    </button>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 p-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Command Output</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        <span x-text="request_in_progress ? 'Running command ' + command_to_run : 'Run a command to see the output'"></span>
                    </p>
                    <div class="p-3 bg-light border rounded bg-dark">
                        <pre class="m-0"><code class="text-white" x-text="command_output"></code></pre>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

@endsection