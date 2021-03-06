@extends('master')
@section('content')
              <div class="ish-part_tagline ish-tagline_regular ish-tagline-colored ish-no-pattern-img">
                <div class="ish-overlay ish-default-tagline">
                </div>
                <div class="ish-row ish-row-notfull ish-resp-centered ish-valign-middle">
                    <div class="ish-row_inner">
                        <div class="ish-pt-taglines-main">
                            <div class="ish-pt-taglines-left ish-default">
                                <div class="ish-overlay">
                                </div>
                                <div class="ish-pt-container">
                                    <div class="wpb_row ish-valign-middle">
                                        <div class="ish-vc_row_inner">
                                            <div class="wpb_column ish-grid1">
                                            </div>
                                            @if(Session::has('no-results'))
                                              <div class="wpb_column ish-grid5 ish-pt-taglines">
                                                  <h1 data-firstletter="M">Search - {{ $term }}</h1>
                                                  <h2>no results for {{ $term }}.</h2>
                                              </div>
                                            @else
                                            <div class="wpb_column ish-grid5 ish-pt-taglines">
                                                <h1 data-firstletter="M">Search - {{ $term }}</h1>
                                                <h2>my tagged portfolio items and articles.</h2>
                                            </div>
                                            @endif
                                            <div class="wpb_column ish-grid5 ish-pt-taglines-additional">
                                                <p>
                                                    I've tagged all items with relevant terms, so feel free to search for skills, languages, or random other things.
                                                </p>
                                            </div>
                                            <div class="wpb_column ish-grid1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content part section -->
            <section class="ish-part_content ish-blog ish-blog-classic ish-blog-align-center ish-with-sidebar">
            <div class="wpb_row vc_row-fluid ish-row-notfull ish-resp-centered ish-row_section ish-taglines-separator-row" style="">
                <div class="ish-vc_row_inner">
                    <div class="vc_col-sm-12 wpb_column column_container" style="">
                        <div class="wpb_wrapper">
                            <div class="ish-sc_separator ish-separator-text ish-separator-double ish-taglines-separator">
                                <span class="ish-line ish-left"><span class="ish-line-border"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ish-row ish-row-notfull ish-with-sidebar">
                <div class="ish-row_inner">
                    <div class=" ish-pc-content ish-grid8 ish-with-sidebar ish-with-right-sidebar">
                      @if(Session::has('no-results'))
                          <div id="post-249" class="wpb_row vc_row-fluid ish-row-notfull ish-row_notsection post-249 post type-post status-publish format-image has-post-thumbnail hentry category-flat category-job tag-painting post_format-post-format-image">
                            <div class="ish-vc_row_inner">
                              <div class="ish-post-content">
                                <h1>No results to display</h1>
                              </div>
                            </div>
                          </div>
                      @else
                        @foreach($posts as $result)
                          <div id="post-249" class="wpb_row vc_row-fluid ish-row-notfull ish-row_notsection post-249 post type-post status-publish format-image has-post-thumbnail hentry category-flat category-job tag-painting post_format-post-format-image">
                              <div class="ish-vc_row_inner">
                                  <div class="ish-post-content">
                                      <h2 class="ish-h3"><a href="/posts/{{ $result->category }}/{{ $result->sub_category }}/{{ $result->blog_url }}">{{ $result->blog_title }}</a></h2>
                                      <div class="ish-blog-post-details">
                                          <span><a href="/posts/{{ strtolower($result->category) }}/{{ strtolower($result->sub_category) }}/{{ strtolower($result->blog_url) }}">{{ $result->date_posted->format('F j, Y') }}</a></span><span class="ish-spacer">/</span><a href="/posts/{{ $result->category }}/{{ $result->sub_category }}">{{ ucwords($result->sub_category) }}</a><span class="ish-spacer">/</span><a href="/posts/{{ $result->category }}"><span>{{ ucwords($result->category) }}</span></a>
                                      </div>
                                      <div class="ish-blog-post-media ish-blog-image">
                                          <a href="/posts/{{ strtolower($result->category) }}/{{ strtolower($result->sub_category) }}/{{ strtolower($result->blog_url) }}">
                                          <img width="1170" height="732" src="{{ URL::asset($result->media_url) }}" class="attachment-theme-large size-theme-large wp-post-image" alt="1602123" /></a>
                                      </div>
                                      <div class="ish-blog-post-excerpt">
                                          <p>
                                              {{ $result->heading }}
                                          </p>
                                      </div>
                                      <span class="ish-blog-post-links">
                                      <a class="ish-read-more" href="/posts/{{ strtolower($result->category) }}/{{ strtolower($result->sub_category) }}/{{ strtolower($result->blog_url) }}">Read more</a>
                                      </span>
                                  </div>
                              </div>
                          </div>
                        @endforeach
                      @endif
                        {{-- {{ $posts->links('partials.paginator') }} --}}
                    </div>
                    <div class="ish-grid4 ish-main-sidebar ish-right-sidebar ish-resp-centered" id="sidebar">
                        <div class="ish-row ish-row-notfull">
                            <div class="ish-row_inner">
                                <div id="text-25" class="ish-grid3 widget-1 widget widget_text">
                                    <div class="textwidget">
                                        <p>
                                            <a href=""><img src="{{ URL::asset('images/kevin-logo.png') }}" alt="Freelo Logo" style="margin-bottom: 15px;"></a><span style="line-height: 65px; white-space: nowrap">Welcome To THE Blog!</span><br/>
                                            I've started to get more into blogging and updating the internet on my life. I'll post anything and everything from new tech try from Kickstarter to plugs about handmade things I sell on Etsy.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ish-row ish-row-notfull">
                            <div class="ish-row_inner">
                                <div id="search-2" class="ish-grid3 widget-2 widget widget_search">
                                    <div class="widget-title ish-sc-element ish-sc_separator ish-icon-left ish-text ish-separator-text ish-separator-solid ish-no-align ish-h5">
                                        <span class="ish-line ish-left"><span class="ish-line-border"></span></span><span class="ish-icon ish-left"><span class="ish-icon-search"></span></span><span class="ish-text">Search</span><span class="ish-line ish-right"><span class="ish-line-border"></span></span>
                                    </div>
                                    <form role="search" method="post" id="searchform" action="/search">
                                      {{ csrf_field() }}
                                        <div>
                                            <label class="screen-reader-text" for="s">Search for:</label>
                                            <input type="text" value="" name="s" id="s" placeholder="Search...">
                                            <input type="submit" id="searchsubmit" value="9">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="ish-row ish-row-notfull">
                            <div class="ish-row_inner">
                                <div id="recent-posts-2" class="ish-grid3 widget-3 widget widget_recent_entries">
                                    <div class="widget-title ish-sc-element ish-sc_separator ish-icon-left ish-text ish-separator-text ish-separator-solid ish-no-align ish-h5">
                                        <span class="ish-line ish-left"><span class="ish-line-border"></span></span><span class="ish-icon ish-left"><span class="ish-icon-doc-text"></span></span><span class="ish-text">Recent Posts</span><span class="ish-line ish-right"><span class="ish-line-border"></span></span>
                                    </div>
                                    <ul>
                                      @foreach($latest as $post)
                                        <li>
                                        <a href="/posts/{{ $post->category }}/{{ $post->sub_category }}/{{ $post->blog_url }}">{{ $post->blog_title }}</a>
                                        <span class="post-date">{{ $post->date_posted->format('F j, Y') }}</span>
                                        </li>
                                      @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ish-row ish-row-notfull">
                            <div class="ish-row_inner">
                                <div id="categories-2" class="ish-grid3 widget-4 widget widget_categories">
                                    <div class="widget-title ish-sc-element ish-sc_separator ish-icon-left ish-text ish-separator-text ish-separator-solid ish-no-align ish-h5">
                                        <span class="ish-line ish-left"><span class="ish-line-border"></span></span><span class="ish-icon ish-left"><span class="ish-icon-folder-open"></span></span><span class="ish-text">Categories</span><span class="ish-line ish-right"><span class="ish-line-border"></span></span>
                                    </div>
                                    <ul>
                                      @foreach($categories as $category)
                                        <li class="cat-item cat-item-13"><a href="/posts/{{ strtolower($category->category) }}/{{ strtolower($category->sub_category) }}" title="">{{ $category->sub_category }}</a> ({{ DB::table('lookups')->where('sub_category', $category->sub_category)->count() }})</li>
                                      @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ish-row ish-row-notfull">
                            <div class="ish-row_inner">
                                <div id="ishyoboy-recent-portfolio-widget-4" class="icon-clock ish-grid3 widget-5 widget widget_ishyoboy-recent-portfolio-widget">
                                    <div class="widget-title ish-sc-element ish-sc_separator ish-icon-left ish-text ish-separator-text ish-separator-solid ish-no-align ish-h5">
                                        <span class="ish-line ish-left"><span class="ish-line-border"></span></span><span class="ish-icon ish-left"><span class="ish-icon-doc-text"></span></span><span class="ish-text">Latest Posts</span><span class="ish-line ish-right"><span class="ish-line-border"></span></span>
                                    </div>
                                    <ul class="recent-projects-widget">
                                      @foreach($latest as $post)
                                        <li><a href="/posts/{{ strtolower($post->category) }}/{{ strtolower($post->sub_category) }}/{{ strtolower($post->blog_url) }}"><img width="200" height="200" src="{{ URL::asset($post->media_url) }}" class="attachment-theme-thumbnail size-theme-thumbnail wp-post-image" alt="papers" /></a></li>
                                      @endforeach
                                    </ul>
                                    <a class="ish-button-small" href="#">Go to Blog</a>
                                </div>
                            </div>
                        </div>
                        <div class="ish-row ish-row-notfull">
                            <div class="ish-row_inner">
                                <div id="archives-2" class="ish-grid3 widget-6 widget widget_archive">
                                    <div class="widget-title ish-sc-element ish-sc_separator ish-icon-left ish-text ish-separator-text ish-separator-solid ish-no-align ish-h5">
                                        <span class="ish-line ish-left"><span class="ish-line-border"></span></span><span class="ish-icon ish-left"><span class="ish-icon-calendar"></span></span><span class="ish-text">Archives</span><span class="ish-line ish-right"><span class="ish-line-border"></span></span>
                                    </div>
                                    <label class="screen-reader-text" for="archives-dropdown-2">Archives</label>
                                    <select id="archives-dropdown-2" name="archive-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>
                                        <option value="">Select Month</option>
                                        <option value='#'> July 2015 &nbsp;(6)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="ish-row ish-row-notfull">
                            <div class="ish-row_inner">
                                <div id="ishyoboy-twitter-widget-7" class="ish-grid3 widget-7 widget widget_ishyoboy-twitter-widget">
                                    <div class="widget-title ish-sc-element ish-sc_separator ish-icon-left ish-text ish-separator-text ish-separator-solid ish-no-align ish-h5">
                                        <span class="ish-line ish-left"><span class="ish-line-border"></span></span><span class="ish-icon ish-left"><span class="ish-icon-twitter"></span></span><span class="ish-text">Latest Tweets</span><span class="ish-line ish-right"><span class="ish-line-border"></span></span>
                                    </div>
                                    <div class="tweets-1" data-username="ishyoboydotcom">
                                    </div>
                                    <a class="ish-button-small" href="https://twitter.com/ishyoboydotcom">Follow us on Twitter</a>
                                </div>
                            </div>
                        </div> --}}
                        <div class="ish-row ish-row-notfull">
                            <div class="ish-row_inner">
                                <div id="text-26" class="ish-grid3 widget-8 widget widget_text">
                                    <div class="widget-title ish-sc-element ish-sc_separator ish-icon-left ish-text ish-separator-text ish-separator-solid ish-no-align ish-h5">
                                        <span class="ish-line ish-left"><span class="ish-line-border"></span></span><span class="ish-icon ish-left"><span class="ish-icon-share"></span></span><span class="ish-text">Follow Me</span><span class="ish-line ish-right"><span class="ish-line-border"></span></span>
                                    </div>
                                    <div class="textwidget">
                                        <div>
                                            <div class="ish-sc-element ish-sc_icon ish-simple ish-color1 ish-text-color1 ish-active-text-color13 ish-tooltip-color13 ish-tooltip-text-color4" style="font-size:20px;width:20px;height:20px;" data-type="tooltip" title="Facebook">
                                                <a href="https://www.facebook.com/kongkuaifan" style="color: #717879;" target="_blank"><span style="width:20px;height:20px;"><span class="ish-icon-facebook" style="font-size:20px;line-height:20px;"></span></span></a>
                                            </div>
                                            <div class="ish-sc-element ish-sc_icon ish-simple ish-color1 ish-text-color1 ish-active-text-color16 ish-tooltip-color16 ish-tooltip-text-color4" style="font-size:20px;width:20px;height:20px;" data-type="tooltip" title="LinkedIn">
                                                <a href="https://www.linkedin.com/in/kevin-cunanan" style="color: #717879;" target="_blank"><span style="width:20px;height:20px;"><span class="ish-icon-linkedin" style="font-size:20px;line-height:20px;"></span></span></a>
                                            </div>
                                            <div class="ish-sc-element ish-sc_icon ish-simple ish-color1 ish-text-color1 ish-active-text-color15 ish-tooltip-color15 ish-tooltip-text-color4" style="font-size:20px;width:20px;height:20px;" data-type="tooltip" title="GitHub">
                                                <a href="https://github.com/kcunanan" style="color: #717879;" target="_blank"><span style="width:20px;height:20px;"><span class="ish-icon-github-circled" style="font-size:20px;line-height:20px;"></span></span></a>
                                            </div>
                                            <div class="ish-sc-element ish-sc_icon ish-simple ish-color1 ish-text-color1 ish-active-text-color14 ish-tooltip-color14 ish-tooltip-text-color4" style="font-size:20px;width:20px;height:20px;" data-type="tooltip" title="Pinterest">
                                                <a href="https://www.pinterest.com/kevincunanan" style="color: #717879;" target="_blank"><span style="width:20px;height:20px;"><span class="ish-icon-pinterest" style="font-size:20px;line-height:20px;"></span></span></a>
                                            </div>
                                            <div class="ish-sc-element ish-sc_icon ish-simple ish-color1 ish-text-color1 ish-active-text-color17 ish-tooltip-color17 ish-tooltip-text-color4" style="font-size:20px;width:20px;height:20px;" data-type="tooltip" title="Instagram">
                                                <a href="https://www.instagram.com/cunananananan/" style="color: #717879;" target="_blank"><span style="width:20px;height:20px;"><span class="ish-icon-instagram" style="font-size:20px;line-height:20px;"></span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <!-- Content part section END -->
@endsection
