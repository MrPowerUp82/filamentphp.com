<div
    x-cloak
    x-data="{
        tall_stack_is_hovering: false,
    }"
    class="mx-auto w-full max-w-screen-lg px-5 pt-20"
>
    <div class="text-center text-3xl">
        <span class="font-bold">Maximum</span>
        <span class="">Productivity Speed</span>
    </div>
    <div class="grid pt-5">
        {{-- Outer Circle --}}
        <div
            class="h-[50rem] w-[50rem] self-center justify-self-center rounded-full ring-1 ring-[#F1E3E3]/40 [grid-area:1/-1]"
        ></div>

        {{-- Middle Circle --}}
        <div
            class="h-[40rem] w-[40rem] self-center justify-self-center rounded-full ring-1 ring-[#F1E3E3]/60 [grid-area:1/-1]"
        ></div>

        {{-- Inner Circle --}}
        <div
            class="h-[30rem] w-[30rem] self-center justify-self-center rounded-full ring-1 ring-[#F1E3E3]/80 [grid-area:1/-1]"
        ></div>

        {{-- Speedometer Circle --}}
        <div
            class="relative h-[18rem] w-[18rem] self-center justify-self-center rounded-full bg-gradient-to-bl from-[#FFF1E9] to-[#FBF0EF]/0 [grid-area:1/-1]"
        >
            {{-- Tailwind --}}
            <div class="group/tall-link absolute -right-36 -top-16 z-20">
                <a
                    href="https://tailwindcss.com"
                    target="_blank"
                    class="flex items-center gap-3 transition duration-300 group-hover/tall-link:translate-x-1"
                >
                    {{-- Logo --}}
                    <svg
                        class="w-7"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 54 33"
                    >
                        <g clip-path="url(#prefix__clip0)">
                            <path
                                fill="#38bdf8"
                                fill-rule="evenodd"
                                d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z"
                                clip-rule="evenodd"
                            />
                        </g>
                        <defs>
                            <clipPath id="prefix__clip0">
                                <path
                                    fill="#fff"
                                    d="M0 0h54v32.4H0z"
                                />
                            </clipPath>
                        </defs>
                    </svg>
                    {{-- Title --}}
                    <div class="flex items-end">
                        <span class="text-2xl font-bold">T</span>
                        <span
                            class="relative -left-0.5 text-lg transition duration-500"
                            :class="{ 'opacity-40 translate-x-1': tall_stack_is_hovering, }"
                        >
                            ailwind CSS
                        </span>
                    </div>
                </a>
            </div>

            {{-- Alpine --}}
            <div class="group/tall-link absolute -right-[11.5rem] top-7 z-20">
                <a
                    href="https://alpinejs.dev"
                    target="_blank"
                    class="flex items-center gap-3 transition duration-300 group-hover/tall-link:translate-x-1"
                >
                    {{-- Logo --}}
                    <svg
                        class="scale-90"
                        width="32"
                        height="16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="m24.657.653 7.045 7.066-7.045 7.066-7.044-7.066L24.657.653Z"
                            fill="#77C1D2"
                        />
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="m7.045.653 14.605 14.65H7.56L0 7.718 7.045.653Z"
                            fill="#2D3441"
                        />
                    </svg>
                    {{-- Title --}}
                    <div class="flex items-end gap-px">
                        <span class="text-2xl font-bold">A</span>
                        <span
                            class="text-lg transition duration-500"
                            :class="{ 'opacity-40 translate-x-1': tall_stack_is_hovering, }"
                        >
                            lpine.js
                        </span>
                    </div>
                </a>
            </div>

            {{-- Laravel --}}
            <div class="group/tall-link absolute -right-48 top-[8.5rem] z-20">
                <a
                    href="https://laravel.com"
                    target="_blank"
                    class="flex items-center gap-3 transition duration-300 group-hover/tall-link:translate-x-1"
                >
                    {{-- Logo --}}
                    <svg
                        width="23"
                        height="25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M22.37 6.03a.38.38 0 0 1 .013.095v5.045a.375.375 0 0 1-.181.319l-4.151 2.438v4.831a.376.376 0 0 1-.181.32l-8.665 5.088c-.02.012-.041.018-.062.026-.009.003-.017.008-.025.01a.355.355 0 0 1-.185 0c-.01-.002-.019-.008-.028-.012a.322.322 0 0 1-.06-.024L.181 19.078a.375.375 0 0 1-.18-.32V3.625c0-.033.003-.065.012-.096.002-.012.009-.021.012-.031.007-.02.014-.04.024-.058.006-.012.016-.021.024-.032.01-.015.02-.03.032-.043.01-.011.024-.019.036-.028.013-.01.024-.022.04-.031L4.513.76a.357.357 0 0 1 .36 0l4.332 2.544h.001c.015.01.026.022.04.032.012.01.025.017.035.028.013.012.022.028.032.043.008.01.018.02.025.032.01.018.016.038.023.058.004.01.01.02.013.03a.38.38 0 0 1 .012.097v9.452l3.61-2.12V6.125a.38.38 0 0 1 .013-.096c.003-.011.009-.02.013-.03.007-.02.013-.04.023-.058.007-.012.017-.022.025-.032.01-.015.02-.03.032-.043.01-.011.023-.019.035-.028.013-.01.025-.023.04-.031l4.333-2.545a.356.356 0 0 1 .36 0l4.332 2.544c.015.01.027.021.04.031.012.01.025.018.036.028.012.013.021.029.032.043.008.011.018.02.024.033.01.018.017.038.024.057.004.01.01.02.012.031Zm-.709 4.927V6.762l-1.516.89-2.094 1.23v4.195l3.61-2.12Zm-4.332 7.588v-4.197l-2.06 1.2-5.883 3.424v4.237l7.943-4.664ZM.722 4.261v14.285l7.942 4.664v-4.237l-4.149-2.395v-.001h-.003c-.014-.009-.025-.02-.038-.031-.012-.01-.025-.017-.035-.027v-.001c-.012-.012-.02-.026-.03-.039-.01-.012-.02-.023-.027-.035v-.002c-.009-.014-.014-.03-.02-.046-.006-.014-.013-.026-.017-.041-.005-.018-.005-.037-.007-.055-.002-.014-.006-.027-.006-.041V6.38L2.24 5.151l-1.517-.89Zm3.971-2.756-3.608 2.12 3.608 2.119 3.609-2.12-3.609-2.119ZM6.57 14.73l2.094-1.23V4.262l-1.516.89-2.094 1.23v9.24l1.516-.89ZM17.69 4.006l-3.609 2.12 3.609 2.118 3.608-2.119-3.608-2.119Zm-.361 4.876-2.094-1.23-1.516-.89v4.195l2.094 1.23 1.516.89V8.882Zm-8.304 9.453 5.293-3.082 2.646-1.54-3.606-2.118-4.153 2.438-3.784 2.222 3.604 2.08Z"
                            fill="#FF2D20"
                        />
                    </svg>
                    {{-- Title --}}
                    <div class="flex items-end gap-px">
                        <span class="text-2xl font-bold">L</span>
                        <span
                            class="text-lg transition duration-500"
                            :class="{ 'opacity-40 translate-x-1': tall_stack_is_hovering, }"
                        >
                            aravel
                        </span>
                    </div>
                </a>
            </div>

            {{-- Livewire --}}
            <div class="group/tall-link absolute -right-[10rem] top-64 z-20">
                <a
                    href="https://laravel-livewire.com"
                    target="_blank"
                    class="flex items-center gap-3 transition duration-300 group-hover/tall-link:translate-x-1"
                >
                    {{-- Logo --}}
                    <svg
                        width="24"
                        height="27"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M22.415 17.96c-.438.662-.77 1.478-1.66 1.478-1.5 0-1.58-2.31-3.08-2.31-1.498 0-1.417 2.31-2.916 2.31-1.498 0-1.579-2.31-3.078-2.31-1.5 0-1.418 2.31-2.916 2.31-1.499 0-1.58-2.31-3.079-2.31s-1.418 2.31-2.916 2.31c-.471 0-.802-.228-1.081-.541A12.796 12.796 0 0 1 0 12.507C0 5.663 5.287.115 11.809.115c6.521 0 11.808 5.548 11.808 12.392 0 1.957-.432 3.807-1.202 5.453Z"
                            fill="#FB70A9"
                        />
                        <path
                            d="M7.093 16.737v5.132a1.668 1.668 0 1 1-3.336 0v-6.196c.312-.571.667-1.066 1.308-1.066 1.044 0 1.408 1.31 2.028 2.13Zm6.3.267v8.117a1.853 1.853 0 0 1-3.706 0v-9.187c.35-.673.709-1.327 1.446-1.327 1.167 0 1.485 1.64 2.26 2.397Zm5.93-.149v5.892a1.668 1.668 0 0 1-3.335 0v-7.242c.29-.497.636-.898 1.213-.898 1.096 0 1.443 1.445 2.122 2.248Z"
                            fill="#4E56A6"
                        />
                        <path
                            d="M7.093 18.31c-.296-.362-.646-.631-1.152-.631-1.203 0-1.424 1.515-2.183 2.199V13.34a1.668 1.668 0 1 1 3.335 0v4.97Zm6.3.117c-.315-.42-.684-.748-1.244-.748-1.337 0-1.46 1.876-2.462 2.394v-2.89a1.853 1.853 0 1 1 3.707 0v1.244Zm5.93-.325c-.256-.253-.56-.423-.965-.423-1.296 0-1.451 1.76-2.37 2.342v-5.869a1.668 1.668 0 0 1 3.335 0v3.95Z"
                            fill="#000"
                            fill-opacity=".299"
                        />
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M22.415 17.96c-.438.662-.77 1.478-1.66 1.478-1.5 0-1.58-2.31-3.08-2.31-1.498 0-1.417 2.31-2.916 2.31-1.498 0-1.579-2.31-3.078-2.31-1.5 0-1.418 2.31-2.916 2.31-1.499 0-1.58-2.31-3.079-2.31s-1.418 2.31-2.916 2.31c-.471 0-.802-.228-1.081-.541A12.796 12.796 0 0 1 0 12.507C0 5.663 5.287.115 11.809.115c6.521 0 11.808 5.548 11.808 12.392 0 1.957-.432 3.807-1.202 5.453Z"
                            fill="#FB70A9"
                        />
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M19.86 19.191c3.094-4.603 3.174-9.71.24-15.319a12.36 12.36 0 0 1 3.517 8.66c0 1.95-.448 3.794-1.246 5.434-.454.66-.799 1.472-1.721 1.472-.316 0-.571-.095-.79-.247Z"
                            fill="#E24CA6"
                        />
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M11.175 15.598c4.107 0 5.836-2.382 5.836-5.765 0-3.384-2.613-6.498-5.835-6.498-3.223 0-5.836 3.114-5.836 6.498 0 3.383 1.73 5.765 5.835 5.765Z"
                            fill="#fff"
                        />
                        <path
                            d="M9.607 10.024c1.208 0 2.188-1.081 2.188-2.415s-.98-2.416-2.188-2.416c-1.21 0-2.189 1.082-2.189 2.416 0 1.334.98 2.415 2.189 2.415Z"
                            fill="#030776"
                        />
                        <path
                            d="M9.242 8.166c.604 0 1.094-.499 1.094-1.115 0-.615-.49-1.114-1.094-1.114-.605 0-1.095.499-1.095 1.114 0 .616.49 1.115 1.095 1.115Z"
                            fill="#fff"
                        />
                    </svg>
                    {{-- Title --}}
                    <div class="flex items-end gap-px">
                        <span class="text-2xl font-bold">L</span>
                        <span
                            class="text-lg transition duration-500"
                            :class="{ 'opacity-40 translate-x-1': tall_stack_is_hovering, }"
                        >
                            ivewire
                        </span>
                    </div>
                </a>
            </div>

            {{-- Orange Arc --}}
            <svg
                width="88"
                height="228"
                class="absolute right-[0rem] top-[0.45rem] z-20 -rotate-1"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M3.362 3a162.723 162.723 0 0 1 59.56 222.284"
                    stroke="#FF7323"
                    stroke-width="5"
                    stroke-linecap="round"
                />
            </svg>

            {{-- Fade Arc --}}
            <svg
                width="28"
                class="absolute right-[8.5rem] -top-[3.3rem] -rotate-[102deg]"
                height="129"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M19.179 2.807A162.722 162.722 0 0 1 2.923 126.284"
                    stroke="url(#a)"
                    stroke-width="5"
                    stroke-linecap="round"
                />
                <defs>
                    <linearGradient
                        id="a"
                        x1="4"
                        y1="129.5"
                        x2="-51.33"
                        y2="73.589"
                        gradientUnits="userSpaceOnUse"
                    >
                        <stop stop-color="#F1E3E3" />
                        <stop
                            offset="1"
                            stop-color="#F1E3E3"
                            stop-opacity="0"
                        />
                    </linearGradient>
                </defs>
            </svg>

            {{-- Speed Lines --}}
            <svg
                class="absolute -right-16 -top-16 w-72 rotate-2"
                width="311"
                height="333"
                viewBox="0 0 311 333"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M4.5657 39.2978L1.02603 32.2428"
                    stroke="#F1E3E3"
                    stroke-linecap="round"
                />
                <path
                    d="M21.0291 32.4878L18.0974 25.1593"
                    stroke="#F1E3E3"
                    stroke-linecap="round"
                />
                <path
                    d="M38.3956 26.6808L36.0169 19.1546"
                    stroke="#F1E3E3"
                    stroke-linecap="round"
                />
                <path
                    d="M56.1667 22.3201L55.1266 14.4958"
                    stroke="#F1E3E3"
                    stroke-linecap="round"
                />
                <path
                    d="M73.0567 21.2073L72.7763 13.3191"
                    stroke="#F1E3E3"
                    stroke-linecap="round"
                />
                <path
                    d="M106.899 20.379L108.076 12.1426"
                    stroke="#F1E3E3"
                    stroke-linecap="round"
                />
                <path
                    d="M124.832 22.7794L126.635 15.095"
                    stroke="#F1E3E3"
                    stroke-linecap="round"
                />
                <path
                    d="M142.198 26.7314L144.568 19.2024"
                    stroke="#F1E3E3"
                    stroke-linecap="round"
                />
                <path
                    d="M158.671 32.0909L161.024 25.0856"
                    stroke="#F1E3E3"
                    stroke-linecap="round"
                />
                <path
                    d="M173.967 38.7672L177.497 32.1453"
                    stroke="#F1E3E3"
                    stroke-linecap="round"
                />
                <path
                    d="M204.129 57.0277L208.582 49.9995"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M219.497 66.5752L224.295 60.3074"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M231.622 79.2213L236.872 73.3276"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M243.389 91.6934L249.272 86.2707"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M253.979 104.98L259.915 100.39"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M270.978 134.731L278.559 131.303"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M278.576 151.15L286.028 148.548"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M283.394 168.323L291.019 166.282"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M286.924 185.232L294.819 183.932"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M289.278 203.333L296.76 202.758"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M289.277 238.057L297.578 238.62"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M287.481 255.814L295.278 257.043"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M283.611 272.049L291.295 273.854"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M278.73 288.618L286.302 291.204"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M272.249 304.505L279.114 307.535"
                    stroke="#FF7323"
                    stroke-linecap="round"
                />
                <path
                    d="M190.44 47.4417L199.853 32.1454"
                    stroke="#FF7323"
                    stroke-width="2"
                    stroke-linecap="round"
                />
                <path
                    d="M264.569 120.393L278.688 112.157"
                    stroke="#FF7323"
                    stroke-width="2"
                    stroke-linecap="round"
                />
                <path
                    d="M290.454 220.407L309.281 220.407"
                    stroke="#FF7323"
                    stroke-width="2"
                    stroke-linecap="round"
                />
                <path
                    d="M264.569 321.598L279.865 331.011"
                    stroke="#FF7323"
                    stroke-width="2"
                    stroke-linecap="round"
                />
                <path
                    d="M90.426 19.2023V1.55276"
                    stroke="#F1E3E3"
                    stroke-width="2"
                    stroke-linecap="round"
                />
            </svg>
        </div>

        {{-- TALL Stack --}}
        <div
            x-on:mouseenter="tall_stack_is_hovering = true"
            x-on:mouseleave="tall_stack_is_hovering = false"
            class="relative z-10 self-center justify-self-center pr-36 pt-10 [grid-area:1/-1]"
        >
            <div class="flex justify-end">
                <div class="">
                    <div class="text-2xl tracking-widest">Built with the</div>
                    <div class="grid">
                        <div
                            class="text-3xl font-black tracking-wide [grid-area:1/-1]"
                        >
                            TALL Stack
                        </div>
                        <div
                            class="-z-10 h-5 w-16 self-end justify-self-start bg-peach-orange [grid-area:1/-1]"
                        ></div>
                    </div>
                </div>
            </div>
            <div class="pt-5 text-right text-xs text-rum">/tɔːl stæk/</div>
            <div class="pt-5 text-right text-rum">
                A set of frameworks that combine to form
                <br />
                dynamic, maintainable, full-stack
                <br />
                applications with little effort.
            </div>
        </div>
    </div>
</div>
