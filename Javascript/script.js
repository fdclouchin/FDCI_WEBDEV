// alert("this is an external file");
// console.log(name1);
// const RECRUIT_EMAIL_TEMPLATE = 11;


// var name1 = "tester1";
// var monthlyTest = 123;
// var monthlyTest1 = "123";
// var isString = true;

// if (name1 == "tester" ){
//     isString = false;
// } else if (name1 == "test"){
//     isString = true;
// } else{
//     isString = "not a string";   
// }

// console.log(name1);
// console.log(monthlyTest);
// console.log(monthlyTest1);
// console.log(typeof monthlyTest);
// console.log(typeof monthlyTest1);
// console.log(name1 + " -> " + isString);

    var louch = {
        gender: "male",
        height: "165cm",
        skin_color: "light brown",
        is_gay: false,
        work:{
            title: "qa",
            company: "fdci",
            location: "it park"
        }
        // ,watchAnime: function(){
        //     alert("hehehehe");
        // }
    };

    function sayMyName(){
        let inputName = document.getElementById('name').value;
        alert("henlo " + inputName);
        console.log(inputName);
        // louchin.watchAnime();
    }

    function sayHello(gender, skin_color){
        alert("Test " + gender + " color " + skin_color);
        console.log(gender, skin_color);
    }

    sayHello("gay","black");

    