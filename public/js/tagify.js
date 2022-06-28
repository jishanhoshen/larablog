const ul = document.querySelector(".inputTags ul"),
input = document.querySelector(".tagsInput"),
tagNumb = document.querySelector(".details span");
tagsinput = document.querySelector(".inputTags #tags");
form = document.querySelector('form');

let maxTags = 0;
if(input.dataset.limit){
    maxTags = input.dataset.limit
}

let tags = [];
if(input.dataset.value){
    tags = JSON.parse(JSON.stringify(input.dataset.value.split(',')));
}
countTags();
createTag();

function countTags(){
    tagNumb.innerText = maxTags - tags.length;
}

function createTag(){
    ul.querySelectorAll("li").forEach(li => li.remove());
    tags.slice().reverse().forEach(tag =>{
        let liTag = `<li class="dark:bg-gray-700"><input type="hidden" name="tags[]" value="${tag}">${tag} <i class="fa fa-times" onclick="remove(this, '${tag}')"></i></li>`;
        ul.insertAdjacentHTML("afterbegin", liTag);
    });
    countTags();
}

function remove(element, tag){
    let index  = tags.indexOf(tag);
    tags = [...tags.slice(0, index), ...tags.slice(index + 1)];
    element.parentElement.remove();
    countTags();
}

function addTag(e){
    if(e.key == "Enter"){
        let tag = e.target.value.replace(/\s+/g, ' ');
        if(tag.length > 1 && !tags.includes(tag)){
            if(tags.length < maxTags){
                tag.split(',').forEach(tag => {
                    tags.push(tag);
                    createTag();
                });
            }
        }
        e.target.value = "";
    }
}

input.addEventListener("keyup", addTag);

const removeBtn = document.querySelector(".details button");
removeBtn.addEventListener("click", () =>{
    tags.length = 0;
    ul.querySelectorAll("li").forEach(li => li.remove());
    countTags();
});
