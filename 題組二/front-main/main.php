<style>
    .tags {
        display: flex;
    }

    .tag {
        border: 1px solid black;
        background-color: lightgray;
    }

    .active {
        background-color: white;
    }

    article section {
        border: 1px solid black;
        display: none;
    }
</style>
<div class="tags">
    <div id="sec01" class="tag active">健康新知</div>
    <div id="sec02" class="tag">菸害防治</div>
    <div id="sec03" class="tag">癌症防治</div>
    <div id="sec04" class="tag">慢性病防治</div>
</div>
<article>
    <section id="section01" style="display: block;">
        <h2>健康新知</h2>
        <pre>
</pre>
    </section>
    <section id="section02">
        <h2>菸害防治</h2>
        <pre>
</pre>
    </section>
    <section id="section03">
        <h2>癌症防治</h2>
        <pre>

</pre>
    </section>
    <section id="section04">
        <h2>慢性病防治</h2>
        <pre>
</pre>
    </section>
</article>
<!-- //建立頁籤的點擊事件 -->
<script>
    $(".tag").on("click", function () {
        $(".tag").removeClass('activ')
        $(this).addClass('active')
        let id = $(this).attr('id').replace("sec", "section");
        $("section").hide();
        $("#" + id).show();
    })
</script>