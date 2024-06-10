@extends('layouts.main')

@section('title', $post->title)

@section('container')
        <h2 class="post-name">{{ $post->title }}</h2>
        @if ($post->post_image)
            <img src="{{ asset('storage/' . $post->post_image) }}" alt="Post Image" class="imgpost">
        @endif
        <div class="content">
            <svg width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_14_1268)">
                <rect width="98" height="98" rx="49" fill="#374231"/>
                <g filter="url(#filter0_d_14_1268)">
                <path d="M84.8879 49.2059C84.579 47.9663 84.0726 46.7845 83.3879 45.7059C82.6556 44.6267 81.7811 43.6512 80.7879 42.8059C78.7993 41.0854 76.4367 39.8527 73.8879 39.2059L72.7879 39.0059C73.4967 36.291 73.24 33.4141 72.0615 30.8676C70.8831 28.3211 68.8563 26.2633 66.328 25.0464C63.7997 23.8295 60.927 23.5292 58.2016 24.1967C55.4763 24.8643 53.0676 26.4583 51.3879 28.7059C50.3185 26.1344 48.3447 24.0434 45.8392 22.8275C43.3337 21.6116 40.4697 21.3549 37.7879 22.1059H37.3879C36.4173 22.3739 35.5027 22.8142 34.6879 23.4059C32.6665 24.7607 31.1178 26.7121 30.2574 28.9885C29.3971 31.2648 29.2679 33.7527 29.8879 36.1059L28.2879 36.0059H26.7879C22.7395 36.288 18.966 38.1568 16.2879 41.2059C16.1803 41.4762 16.0087 41.7164 15.7879 41.9059C15.7879 41.9324 15.7774 41.9578 15.7586 41.9766C15.7399 41.9954 15.7144 42.0059 15.6879 42.0059C14.2693 43.7854 13.4005 45.9401 13.1879 48.2059C12.3879 54.2059 16.1879 60.5059 22.4879 63.1059C22.2879 71.7059 22.0879 80.3059 21.9879 88.9059C29.9256 94.1926 39.2508 97.011 48.7879 97.0059C57.1971 97.0088 65.4644 94.8386 72.7879 90.7059L71.8879 67.8059C81.4879 65.5059 86.7879 56.4059 84.8879 49.2059ZM57.9879 35.0059C58.5879 33.1059 60.2879 31.9059 61.7879 32.3059C63.2879 32.7059 63.8879 34.7059 63.2879 36.7059C62.6879 38.7059 60.9879 39.9059 59.4879 39.4059C57.9879 38.9059 57.3879 37.0059 57.9879 35.0059ZM38.8879 28.9059C40.2879 28.4059 42.0879 29.5059 42.7879 31.5059C43.4879 33.5059 42.8879 35.4059 41.4879 35.9059C40.0879 36.4059 38.2879 35.3059 37.5879 33.4059C36.8879 31.5059 37.3879 29.5059 38.8879 28.9059ZM30.6879 50.4059C29.5879 51.5059 27.4879 51.1059 26.0879 49.6059C24.6879 48.1059 24.4879 46.0059 25.6879 44.9059C26.1244 44.5078 26.6973 44.293 27.2879 44.3059H27.9879C28.8821 44.5207 29.6864 45.0103 30.2879 45.7059C30.8156 46.2096 31.1825 46.8581 31.3426 47.5698C31.5028 48.2815 31.4489 49.0247 31.1879 49.7059L30.6879 50.4059ZM60.6879 57.6059C58.7879 62.3059 49.2879 57.5059 48.5879 57.6059C45.6879 57.8059 39.2879 61.3059 36.4879 57.6059C35.1879 55.9059 36.2879 52.8059 38.6879 50.0059C41.0879 47.2059 45.3879 44.3059 49.4879 44.5059C53.5879 44.7059 57.7879 48.3059 59.7879 51.9059C61.7879 55.5059 61.2879 56.1059 60.6879 57.6059ZM71.7879 52.8059C71.0426 53.0836 70.2263 53.1067 69.4664 52.8715C68.7066 52.6363 68.046 52.1561 67.5879 51.5059V51.3059C67.5301 51.2546 67.4942 51.183 67.4879 51.1059C67.0879 49.6059 68.2879 47.9059 70.2879 47.4059C70.7011 47.2439 71.1451 47.1756 71.5879 47.2059C72.2158 47.1384 72.8485 47.2777 73.3899 47.6025C73.9314 47.9274 74.352 48.4202 74.5879 49.0059C75.0879 50.5059 73.7879 52.2059 71.7879 52.8059Z" fill="white"/>
                <path d="M84.8879 49.2059C84.579 47.9663 84.0726 46.7845 83.3879 45.7059C82.6556 44.6267 81.7811 43.6512 80.7879 42.8059C78.7993 41.0854 76.4367 39.8527 73.8879 39.2059L72.7879 39.0059C73.4967 36.291 73.24 33.4141 72.0615 30.8676C70.8831 28.3211 68.8563 26.2633 66.328 25.0464C63.7997 23.8295 60.927 23.5292 58.2016 24.1967C55.4763 24.8643 53.0676 26.4583 51.3879 28.7059C50.3185 26.1344 48.3447 24.0434 45.8392 22.8275C43.3337 21.6116 40.4697 21.3549 37.7879 22.1059H37.3879C36.4173 22.3739 35.5027 22.8142 34.6879 23.4059C32.6665 24.7607 31.1178 26.7121 30.2574 28.9885C29.3971 31.2648 29.2679 33.7527 29.8879 36.1059L28.2879 36.0059H26.7879C22.7395 36.288 18.966 38.1568 16.2879 41.2059C16.1803 41.4762 16.0087 41.7164 15.7879 41.9059C15.7879 41.9324 15.7774 41.9578 15.7586 41.9766C15.7399 41.9954 15.7144 42.0059 15.6879 42.0059C14.2693 43.7854 13.4005 45.9401 13.1879 48.2059C12.3879 54.2059 16.1879 60.5059 22.4879 63.1059C22.2879 71.7059 22.0879 80.3059 21.9879 88.9059C29.9256 94.1926 39.2508 97.011 48.7879 97.0059C57.1971 97.0088 65.4644 94.8386 72.7879 90.7059L71.8879 67.8059C81.4879 65.5059 86.7879 56.4059 84.8879 49.2059ZM57.9879 35.0059C58.5879 33.1059 60.2879 31.9059 61.7879 32.3059C63.2879 32.7059 63.8879 34.7059 63.2879 36.7059C62.6879 38.7059 60.9879 39.9059 59.4879 39.4059C57.9879 38.9059 57.3879 37.0059 57.9879 35.0059ZM38.8879 28.9059C40.2879 28.4059 42.0879 29.5059 42.7879 31.5059C43.4879 33.5059 42.8879 35.4059 41.4879 35.9059C40.0879 36.4059 38.2879 35.3059 37.5879 33.4059C36.8879 31.5059 37.3879 29.5059 38.8879 28.9059ZM30.6879 50.4059C29.5879 51.5059 27.4879 51.1059 26.0879 49.6059C24.6879 48.1059 24.4879 46.0059 25.6879 44.9059C26.1244 44.5078 26.6973 44.293 27.2879 44.3059H27.9879C28.8821 44.5207 29.6864 45.0103 30.2879 45.7059C30.8156 46.2096 31.1825 46.8581 31.3426 47.5698C31.5028 48.2815 31.4489 49.0247 31.1879 49.7059L30.6879 50.4059ZM60.6879 57.6059C58.7879 62.3059 49.2879 57.5059 48.5879 57.6059C45.6879 57.8059 39.2879 61.3059 36.4879 57.6059C35.1879 55.9059 36.2879 52.8059 38.6879 50.0059C41.0879 47.2059 45.3879 44.3059 49.4879 44.5059C53.5879 44.7059 57.7879 48.3059 59.7879 51.9059C61.7879 55.5059 61.2879 56.1059 60.6879 57.6059ZM71.7879 52.8059C71.0426 53.0836 70.2263 53.1067 69.4664 52.8715C68.7066 52.6363 68.046 52.1561 67.5879 51.5059V51.3059C67.5301 51.2546 67.4942 51.183 67.4879 51.1059C67.0879 49.6059 68.2879 47.9059 70.2879 47.4059C70.7011 47.2439 71.1451 47.1756 71.5879 47.2059C72.2158 47.1384 72.8485 47.2777 73.3899 47.6025C73.9314 47.9274 74.352 48.4202 74.5879 49.0059C75.0879 50.5059 73.7879 52.2059 71.7879 52.8059Z" stroke="#374231" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <path d="M16.288 41.3058C16.1803 41.5761 16.0088 41.8163 15.788 42.0058C15.788 42.0323 15.7775 42.0577 15.7587 42.0765C15.7399 42.0952 15.7145 42.1058 15.688 42.1058L16.288 41.3058Z" fill="white"/>
                <path d="M31.188 49.8058L30.688 50.4058C29.588 51.5058 27.488 51.1058 26.188 49.6058C24.888 48.1058 24.488 46.0058 25.688 44.9058C26.1245 44.5078 26.6974 44.293 27.288 44.3058H27.988C28.8821 44.5207 29.6864 45.0103 30.288 45.7058C30.8356 46.2176 31.2149 46.8837 31.3757 47.6159C31.5364 48.348 31.4709 49.1117 31.188 49.8058Z" fill="white"/>
                <path d="M60.688 57.6059C58.788 62.3059 49.288 57.5059 48.588 57.6059C45.688 57.8059 39.288 61.3059 36.488 57.6059C35.188 55.9059 36.288 52.8059 38.688 50.0059C41.088 47.2059 45.388 44.3059 49.488 44.5059C53.588 44.7059 57.888 48.3059 59.788 51.9059C61.688 55.5059 61.288 56.1059 60.688 57.6059Z" fill="white"/>
                <path d="M41.488 35.9058C40.088 36.5058 38.288 35.3058 37.588 33.4058C36.888 31.5058 37.388 29.5058 38.888 28.9058C40.388 28.3058 42.088 29.5058 42.788 31.5058C43.488 33.5058 42.888 35.4058 41.488 35.9058Z" fill="white"/>
                <path d="M63.288 36.7058C62.688 38.7058 60.988 39.9058 59.488 39.4058C57.988 38.9058 57.388 37.0058 57.988 35.0058C58.588 33.0058 60.288 31.9058 61.788 32.3058C63.288 32.7058 63.888 34.7058 63.288 36.7058Z" fill="white"/>
                <path d="M71.788 52.8058C69.988 53.3058 68.288 52.7058 67.688 51.5058C67.5888 51.3071 67.5888 51.3071 67.4891 51.1078C67.088 49.6058 68.288 47.9058 70.288 47.4058C70.7012 47.2438 71.1452 47.1755 71.588 47.2058C72.2275 47.1478 72.8692 47.2898 73.4245 47.6123C73.9798 47.9347 74.4213 48.4216 74.688 49.0058C75.088 50.5058 73.788 52.2058 71.788 52.8058Z" fill="white"/>
                <path d="M41.488 35.9058C40.088 36.5058 38.288 35.3058 37.588 33.4058C36.888 31.5058 37.388 29.5058 38.888 28.9058C40.388 28.3058 42.088 29.5058 42.788 31.5058C43.488 33.5058 42.888 35.4058 41.488 35.9058Z" fill="#374231"/>
                <path d="M37.7879 22.1058H37.3879C36.4173 22.3738 35.5027 22.8142 34.6879 23.4058C33.9528 23.1804 33.272 22.8059 32.6879 22.3058C31.1879 20.9058 30.7879 18.8058 31.8879 17.7058C32.9879 16.6058 34.9879 16.8058 36.4879 18.2058C37.066 18.6545 37.498 19.2645 37.7294 19.9587C37.9608 20.6529 37.9812 21.4001 37.7879 22.1058Z" fill="white"/>
                <path d="M63.288 36.7058C62.688 38.7058 60.988 39.9058 59.488 39.4058C57.988 38.9058 57.388 37.0058 57.988 35.0058C58.588 33.0058 60.288 31.9058 61.788 32.3058C63.288 32.7058 63.888 34.7058 63.288 36.7058Z" fill="#374231"/>
                <path d="M71.788 52.8058C69.988 53.3058 68.288 52.7058 67.688 51.5058C67.5888 51.3071 67.5888 51.3071 67.4891 51.1078C67.088 49.6058 68.288 47.9058 70.288 47.4058C70.7012 47.2438 71.1452 47.1755 71.588 47.2058C72.2275 47.1478 72.8692 47.2898 73.4245 47.6123C73.9798 47.9347 74.4213 48.4216 74.688 49.0058C75.088 50.5058 73.788 52.2058 71.788 52.8058Z" fill="#374231"/>
                <path d="M85.688 44.9058C85.0144 45.3886 84.2157 45.6664 83.388 45.7058C82.685 44.604 81.8068 43.6245 80.788 42.8058C81.0494 41.8014 81.6499 40.9182 82.488 40.3058C84.188 39.1058 86.288 39.2058 87.188 40.5058C88.088 41.8058 87.388 43.7058 85.688 44.9058Z" fill="white"/>
                <path d="M71.5759 23.8118C72.9654 22.2997 73.1642 20.2214 72.0199 19.1698C70.8756 18.1183 68.8214 18.4917 67.4319 20.0038C66.0423 21.516 65.8436 23.5943 66.9879 24.6458C68.1322 25.6974 70.1863 25.324 71.5759 23.8118Z" fill="white"/>
                <path d="M31.188 49.8058L30.688 50.4058C29.588 51.5058 27.488 51.1058 26.188 49.6058C24.888 48.1058 24.488 46.0058 25.688 44.9058C26.1245 44.5078 26.6974 44.293 27.288 44.3058H27.988C28.8821 44.5207 29.6864 45.0103 30.288 45.7058C30.8356 46.2176 31.2149 46.8837 31.3757 47.6159C31.5364 48.348 31.4709 49.1117 31.188 49.8058Z" fill="#374231"/>
                <path d="M16.2879 41.3059C16.1803 41.5762 16.0087 41.8164 15.7879 42.0059C15.7879 42.0324 15.7774 42.0578 15.7587 42.0766C15.7399 42.0954 15.7145 42.1059 15.6879 42.1059C14.4879 43.0059 12.5879 42.6059 11.1879 41.2059C9.78794 39.8059 9.58794 37.6059 10.7879 36.5059C11.9879 35.4059 13.9879 35.9059 15.3879 37.4059C15.8962 37.9012 16.2512 38.5322 16.4108 39.2237C16.5704 39.9152 16.5277 40.638 16.2879 41.3059Z" fill="white"/>
                <path d="M60.688 57.6059C58.788 62.3059 49.288 57.5059 48.588 57.6059C45.688 57.8059 39.288 61.3059 36.488 57.6059C35.188 55.9059 36.288 52.8059 38.688 50.0059C41.088 47.2059 45.388 44.3059 49.488 44.5059C53.588 44.7059 57.888 48.3059 59.788 51.9059C61.688 55.5059 61.288 56.1059 60.688 57.6059Z" fill="#374231"/>
                <path d="M36.3879 69.9059C39.7799 71.7559 43.5329 72.8477 47.3879 73.1059C50.7067 73.2771 54.0286 72.8364 57.1879 71.8059" stroke="#374231" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                <filter id="filter0_d_14_1268" x="8.08179" y="20.6836" width="82.1912" height="85.3223" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="4"/>
                <feGaussianBlur stdDeviation="2"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_14_1268"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_14_1268" result="shape"/>
                </filter>
                <clipPath id="clip0_14_1268">
                <rect width="98" height="98" rx="49" fill="white"/>
                </clipPath>
                </defs>
                </svg>
            <p>{{ $post->deskripsi }}</p>
        </div>
@endsection