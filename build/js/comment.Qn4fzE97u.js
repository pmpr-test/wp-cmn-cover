/*! For license information please see comment.Qn4fzE97u.js.LICENSE.txt */
!function(){const e=PRHelper.getType(),t=PRHelper.getSetting(),n=PRHelper.getHTML(),c=PRHelper.getHook();c.bubbling("click",(c=>{c.preventDefault();const m=n.getTarget(c,".comment-reply-link"),l=n.getParent(m,".comments-container"),o=n.getParent(m,".comment-content"),r=t.getOption("comment.cancel_reply"),a=n.getElement("form",l).cloneNode(!0),p=n.getElements(".comment-reply-link",l);e.each(p,(e=>{n.hide(e)})),n.setValue(n.getElement("#comment_parent",a),n.getData(m,"commentid"));const g=n.createElement('<div class="comment-reply-container"></div>');n.append(r,g),n.append(a,g),n.fadeIn(g,{start:()=>{n.append(g,o)}})}),".comment-reply-link"),c.bubbling("click",(t=>{t.preventDefault();const c=n.getTarget(t,".comment-reply-cancel"),m=n.getParent(c,".comments-container"),l=n.getParent(c,".comment-reply-container"),o=n.getElements(".comment-reply-link",m);e.each(o,(e=>{n.show(e)})),n.fadeOut(l,{end:()=>{l.remove()}})}),".comment-reply-cancel")}();