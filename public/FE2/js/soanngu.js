function toggleReplyInput(commentId) {
    var replyInput = document.getElementById(commentId + "-reply-input");
    var replyButton = document.getElementById(commentId + "-reply-button");
    if (replyInput.style.display === "none") {
        replyInput.style.display = "block";
        replyButton.style.color = "gray";
    } else {
        replyInput.style.display = "none";
        replyButton.style.color = "blue";
    }
}



function toggleLike(commentId) {
    var likeIcon = document.getElementById(commentId + "-like-icon");
    likeIcon.classList.toggle('liked');
}

function postNewComment() {
    var newCommentText = document.getElementById("new-comment-text").value;
    if (newCommentText.trim() === "") {
        return;
    }
    var commentContainer = document.createElement("div");
    commentContainer.className = "comment-container";
    var userAvatar = document.createElement("div");
    userAvatar.className = "user-avatar";
    var commentContent = document.createElement("div");
    commentContent.className = "comment-content";
    var userName = document.createElement("div");
    userName.className = "user-name";
    userName.appendChild(document.createTextNode("Tôi"));
    var commentTextarea = document.createElement("textarea");
    commentTextarea.className = "comment-textarea";
    commentTextarea.value = newCommentText;
    commentContent.appendChild(userName);
    commentContent.appendChild(commentTextarea);
    var commentActions = document.createElement("div");
    commentActions.className = "comment-actions";
    var likeLink = document.createElement("a");
    likeLink.className = "like-icon";
    likeLink.id = "new-comment-like-icon";
    likeLink.onclick = function () {
        toggleLike("new-comment");
    };
    likeLink.innerHTML = '<i class="fa fa-thumbs-up"></i> Like';
    var replyButton = document.createElement("a");
    replyButton.className = "reply-button";
    replyButton.id = "new-comment-reply-button";
    replyButton.onclick = function () {
        toggleReplyInput("new-comment");
    };
    replyButton.appendChild(document.createTextNode("Reply"));
    var addImageButton = document.createElement("a");
    addImageButton.className = "add-image-button";
    addImageButton.id = "new-comment-add-image-button";
    addImageButton.onclick = function () {
        toggleAddImageSection("new-comment");
    };
    addImageButton.appendChild(document.createTextNode("Thêm ảnh"));
    var deleteButton = document.createElement("a");
    deleteButton.className = "reply-button";
    deleteButton.appendChild(document.createTextNode("Xóa"));
    deleteButton.onclick = function () {
        commentContainer.style.display = "none";
    };
    commentActions.appendChild(likeLink);
    commentActions.appendChild(replyButton);
    commentActions.appendChild(addImageButton);
    commentActions.appendChild(deleteButton);
    var addImageSection = document.createElement("div");
    addImageSection.className = "add-image-section";
    addImageSection.id = "new-comment-add-image-section";
    addImageSection.style.display = "none";
    var input = document.createElement("input");
    input.type = "file";
    input.accept = "image/*";
    input.className = "choose-file-button";
    input.onchange = function () {
        // Thêm xử lý tải ảnh lên ở đây nếu cần
    };
    addImageSection.appendChild(input);
    var replyInput = document.createElement("div");
    replyInput.className = "reply-input";
    replyInput.id = "new-comment-reply-input";
    replyInput.style.display = "none";
    var replyTextarea = document.createElement("textarea");
    replyTextarea.placeholder = "Add a comment...";
    var replySubmitButton = document.createElement("button");
    replySubmitButton.appendChild(document.createTextNode("Submit"));
    replyInput.appendChild(replyTextarea);
    replyInput.appendChild(replySubmitButton);
    commentContainer.appendChild(userAvatar);
    commentContainer.appendChild(commentContent);
    commentContainer.appendChild(commentActions);
    commentContainer.appendChild(addImageSection);
    commentContainer.appendChild(replyInput);

    // Tìm comment container cuối cùng và chèn bình luận mới vào sau nó
    var commentContainers = document.getElementsByClassName("comment-container");
    if (commentContainers.length > 0) {
        commentContainers[commentContainers.length - 1].insertAdjacentElement("afterend", commentContainer);
    } else {
        // Nếu không có bình luận nào, chèn vào sau phần new-comment-container
        var newCommentContainer = document.getElementsByClassName("new-comment-container")[0];
        newCommentContainer.insertAdjacentElement("afterend", commentContainer);
    }

    document.getElementById("new-comment-text").value = "";
}