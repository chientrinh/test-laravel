<script setup>
defineProps({
    fill: {
        type: String,
        default: '#000000',
    },
});
</script>

<template>
    <svg width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0,0,256,256" fill-rule="nonzero">
        <g :fill="fill" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none"
            font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <g transform="scale(5.33333,5.33333)">
                <circle cx="24" cy="24" r="6"></circle>
                <path
                    d="M17.09,16.789l-2.769,-2.889c-2.658,2.548 -4.321,6.127 -4.321,10.1c0,3.973 1.663,7.552 4.321,10.1l2.769,-2.889c-1.9,-1.822 -3.09,-4.378 -3.09,-7.211c0,-2.833 1.19,-5.39 3.09,-7.211z">
                </path>
                <path
                    d="M33.679,13.9l-2.769,2.889c1.9,1.822 3.09,4.378 3.09,7.211c0,2.833 -1.19,5.389 -3.09,7.211l2.769,2.889c2.658,-2.548 4.321,-6.127 4.321,-10.1c0,-3.973 -1.663,-7.552 -4.321,-10.1z">
                </path>
                <g>
                    <path
                        d="M11.561,11.021l-2.779,-2.9c-4.177,4.004 -6.782,9.636 -6.782,15.879c0,6.243 2.605,11.875 6.782,15.879l2.779,-2.9c-3.419,-3.278 -5.561,-7.879 -5.561,-12.979c0,-5.1 2.142,-9.701 5.561,-12.979z">
                    </path>
                    <path
                        d="M39.218,8.121l-2.779,2.9c3.419,3.278 5.561,7.879 5.561,12.979c0,5.1 -2.142,9.701 -5.561,12.979l2.779,2.9c4.177,-4.004 6.782,-9.636 6.782,-15.879c0,-6.243 -2.605,-11.875 -6.782,-15.879z">
                    </path>
                </g>
            </g>
        </g>
    </svg>
</template>
