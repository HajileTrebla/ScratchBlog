@extends('layouts.app')

@section('content')
          <div class='rounded mx-2 my-2 px-6 py-4 bg-gray-400 dark:bg-gray-700'>
              <h1 class='text-5xl font-semibold'>
                  {{ __('Create Post') }}
              </h1>
              <div class='rounded mx-2 my-6 px-6 pt-4 bg-gray-300 dark:bg-gray-500'>
                  <form action="{{ route('posts.store') }}" method='POST' class="w-full max-w-lg">
                      @csrf
                      @method('post')
                      <div class="flex flex-col -mx-3 mb-6">
                          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                              <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">
                                    {{ __('Post Title') }}
                              <input type='text'
                                     class="appearance-none block w-full bg-gray-100 text-base text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                     id="grid-title"
                                     type="text"
                                     name="title"
                                     placeholder="My Post Title">
                              <p class="text-red-500 text-xs italic">
                                    {{ __('Please fill out this field.') }}
                              </p>
                              <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-100 text-sm font-bold mb-2">
                                  {{ __('Post Content') }}
                              </label>
                              <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                              <textarea name='body'
                                        id="grid-body"
                                        placeholder="Lorem ipsum dolor sit amet, officia excepteur ex fugiat reprehenderit enim labore culpa sint ad nisi Lorem pariatur mollit ex esse exercitation amet. Nisi anim cupidatat excepteur officia. Reprehenderit nostrud nostrud ipsum Lorem est aliquip amet voluptate voluptate dolor minim nulla est proident."></textarea>
                              <button type="submit" class=" rounded mt-4 px-4 py-2 font-semibold bg-blue-500 hover:bg-blue-100 hover:text-gray-900">
                                  {{ __('Post') }}
                              </button>
                          </div>
                      </div>
                  </form>

                  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                  <script>
//                      CKEDITOR.editorConfig = function( config ) {
//                          config.width = '75%';
//                          config.height = 500;
//                          }

//                      CKEDITOR.replace( 'ClassicEditor', {
//                          width: '75%',
//                          height: 500
//                      });

                        ClassicEditor
                            .create( document.querySelector( '#grid-body' ), {
                                width: 500,
                                height: 500,
                                toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                                heading: {
                                    options: [
                                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                                    ]
                                }
                            } )
                            .catch( error => {
                                console.error( error );
                            } );
                  </script>
              </div>
          </div>
@endsection
