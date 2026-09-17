// 画面内に要素が入ってきたかをチェックする仕組み
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        // 要素が画面に現れたら
        if (entry.isIntersecting) {
            //「is-active」というクラスを追加してアニメーションを開始する
            entry.target.classList.add('is-active');
            // 一度表示されたら、監視を終了する（何度もチカチカさせないため）
            observer.unobserve(entry.target);
        }
    });
}, {
    rootMargin: '-10% 0px' // 💡 画面の上下10%内側に入ったタイミングで発動（少しスクロールしたら出るようにする）
});

//「js-fade」というクラスがついた要素をすべて探して、監視をスタートする
const fadeElements = document.querySelectorAll('.js-fade');
fadeElements.forEach((el) => observer.observe(el));
