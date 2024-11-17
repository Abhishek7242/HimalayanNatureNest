<section id="book-now-section">
    <div id="book-now-container">
        <div id="book-now-inner-container">
            {{-- <img id="background-img" src="https://cdn.britannica.com/32/142132-050-BEE32264/Paragliding.jpg" alt=""> --}}
            <div id="book-now-section-form">
                <h2>HIMALYAN Nature Nest</h2>
                <p>The Spirit of adventure and desire to explore leads us to</p>
                 <p>  scale mountains and dive deep in the oceans
                </p>
                <form >
                    @csrf
                    <div id="book-now-section-input-container">
<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                        <input type="text" id="bookNowSectionNumber" required name="number">
                        <span>Phone No.</span>
<div id="book-now-sectionnumberError" class="book-now-section-error-message error-message"></div>

                    </div>
                    <div>

                        <button id="book-now-section-btn">BOOK NOW</button>
                    </div>
                </form>
            </div>
            <div  id="book-now-section-images"> 

                <div><img loading="lazy" src="https://thewildcone.com/wp-content/uploads/2022/06/paragliding-in-himachal.jpg" alt=""> <span>Paragliding</span></div>
                <div><img loading="lazy" src="https://www.raftingbali.net/wp-content/uploads/2023/10/River-Rafting-in-Bali-FAQ-Feature.jpg" alt=""> <span>Rafting</span></div>
                <div><img loading="lazy" src="https://static.toiimg.com/photo/100182318.cms" alt=""> <span>Camping</span></div>
                <div><img loading="lazy" src="https://vj-prod-website-cms.s3.ap-southeast-1.amazonaws.com/shutterstock1183637155-1703730708105.jpg" alt=""> <span>Trekking</span></div>
            </div>
        </div>
    </div>
</section>
<script src="{{ url('js/bookNowSection.js') }}"></script>
<script src="{{ secure_url('js/bookNowSection.js') }}"></script>