<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import Label from '@/Components/InputLabel.vue'
import Input from '@/Components/TextInput.vue'

const emitTest = e => console.log(e);
</script>

<template>
    <GuestLayout>
        <Label>hoge</Label>
        <Input modelValue="初期" @update:modelValue="emitTest">
        </Input>
    </GuestLayout>
</template>
