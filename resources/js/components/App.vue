<template>
    <div>
        <qrcode-stream @decode="onDecode"></qrcode-stream>
    </div>
</template>

<script>

export default {

    methods: {
        onDecode(string) {
            console.log(string);
        }
    }
}
</script>
