<script>
import CreateExecutors from './CreateExecutors.vue';
import TableExecutors from './TableExecutors.vue';

export default{
    components:{
        CreateExecutors,
        TableExecutors
    }
}
</script>
<template>
    <CreateExecutors />
    <TableExecutors ref="table" />
</template>
<style scoped></style>
