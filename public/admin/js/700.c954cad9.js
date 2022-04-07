"use strict";(self["webpackChunkfodee_admin"]=self["webpackChunkfodee_admin"]||[]).push([[700],{4700:(e,a,t)=>{t.r(a),t.d(a,{default:()=>L});var l=t(3673),n=t(1853),o=t(938),i=t(1959),u=t(2323),d=t(1768),r=t(8825);const c={class:"absolute-bottom-right"},s={class:"absolute-top-left cursor-pointer",style:{padding:"0.2rem"}},m={class:"absolute-top-right cursor-pointer",style:{padding:"0.2rem"}},p={class:"text-h6"},v={class:"text-subtitle2"},f=(0,l.aZ)({props:{dish:null},emits:["dish-edit","dish-remove"],setup(e,{emit:a}){const t=e,f=(0,r.Z)(),h=(0,o.Ey)(o.nF),{dish:g}=(0,i.BK)(t);function y(){f.dialog({title:"Eliminar Plato",message:"Desea eliminar el plato?",ok:!0,cancel:!0}).onOk((()=>{h.remove(Number(g.value.id)).then((()=>{a("dish-remove")})).catch((e=>{n.j7.axiosError(e,["No se pudo eliminar"])}))}))}return(e,t)=>{const n=(0,l.up)("q-avatar"),o=(0,l.up)("q-img"),r=(0,l.up)("q-icon"),f=(0,l.up)("q-card-section"),h=(0,l.up)("q-card");return(0,l.wg)(),(0,l.j4)(h,null,{default:(0,l.w5)((()=>[(0,l.Wm)(o,{ratio:16/9,src:`${(0,i.SU)(d.baseURL)}/${(0,i.SU)(g).image}`},{default:(0,l.w5)((()=>[(0,l._)("div",c," $"+(0,u.zw)(Number((0,i.SU)(g).sell_price).toFixed(2)),1),(0,l._)("div",s,[(0,l.Wm)(n,{size:"md","text-color":""+((0,i.SU)(g).feature?"yellow":"grey"),icon:"mdi-star"},null,8,["text-color"])]),(0,l._)("div",m,[(0,l.Wm)(n,{size:"md",icon:"mdi-pencil","text-color":"primary",onClick:t[0]||(t[0]=e=>a("dish-edit",(0,i.SU)(g)))})])])),_:1},8,["src"]),(0,l.Wm)(f,null,{default:(0,l.w5)((()=>[(0,l._)("div",{class:"float-right cursor-pointer text-negative",onClick:y},[(0,l.Wm)(r,{name:"mdi-delete"})]),(0,l._)("div",p,(0,u.zw)((0,i.SU)(g).name),1),(0,l._)("div",v,(0,u.zw)((0,i.SU)(g).category),1)])),_:1}),(0,l.Wm)(f,{innerHTML:(0,i.SU)(g).description},null,8,["innerHTML"])])),_:1})}}});var h=t(151),g=t(4027),y=t(5096),w=t(5589),b=t(4554),_=t(7518),x=t.n(_);const q=f,Z=q;x()(f,"components",{QCard:h.Z,QImg:g.Z,QAvatar:y.Z,QCardSection:w.Z,QIcon:b.Z});var V=t(8880),W=function(e,a,t,l){function n(e){return e instanceof t?e:new t((function(a){a(e)}))}return new(t||(t=Promise))((function(t,o){function i(e){try{d(l.next(e))}catch(a){o(a)}}function u(e){try{d(l["throw"](e))}catch(a){o(a)}}function d(e){e.done?t(e.value):n(e.value).then(i,u)}d((l=l.apply(e,a||[])).next())}))};const Q=(0,l._)("div",{class:"text-grey-9 q-mt-sm"},"Descripción",-1),S=(0,l.aZ)({props:{dish:null},emits:["dish-created","dish-updated"],setup(e,{emit:a}){const t=e,u=(0,o.Ey)(o.nF),{dish:d}=(0,i.BK)(t),r=(0,i.iH)({category:"",description:"",feature:!1,image:"",name:"",sell_price:0,id:0}),c=(0,i.iH)();function s(){(null===d||void 0===d?void 0:d.value)&&(r.value=d.value)}function m(){return W(this,void 0,void 0,(function*(){n.j7.loading();try{const e=new FormData;if(e.append("category",r.value.category),e.append("description",r.value.description),e.append("feature",Number(r.value.feature).toString()),e.append("name",r.value.name),e.append("sell_price",r.value.sell_price.toString()),c.value&&e.append("image",c.value),r.value.id&&r.value.id>0&&e.append("id",r.value.id.toString()),r.value.id&&r.value.id>0){const t=yield u.update(r.value.id,e);a("dish-updated",t.data)}else{const t=yield u.create(e);a("dish-created",t.data)}}catch(e){n.j7.axiosError(e,["No se pudo guardar el plato"])}n.j7.loading(!1)}))}return s(),(e,a)=>{const t=(0,l.up)("q-input"),n=(0,l.up)("q-editor"),o=(0,l.up)("q-checkbox"),i=(0,l.up)("q-file"),u=(0,l.up)("q-card-section"),d=(0,l.up)("q-btn"),s=(0,l.up)("q-card-actions"),p=(0,l.up)("q-form"),v=(0,l.up)("q-card");return(0,l.wg)(),(0,l.j4)(v,null,{default:(0,l.w5)((()=>[(0,l.Wm)(p,{onSubmit:(0,V.iM)(m,["prevent"])},{default:(0,l.w5)((()=>[(0,l.Wm)(u,{class:"q-gutter-y-sm"},{default:(0,l.w5)((()=>[(0,l.Wm)(t,{modelValue:r.value.name,"onUpdate:modelValue":a[0]||(a[0]=e=>r.value.name=e),type:"text",label:"Nombre del Plato"},null,8,["modelValue"]),Q,(0,l.Wm)(n,{modelValue:r.value.description,"onUpdate:modelValue":a[1]||(a[1]=e=>r.value.description=e),"min-height":"5rem"},null,8,["modelValue"]),(0,l.Wm)(t,{modelValue:r.value.category,"onUpdate:modelValue":a[2]||(a[2]=e=>r.value.category=e),type:"text",label:"Categoría"},null,8,["modelValue"]),(0,l.Wm)(t,{modelValue:r.value.sell_price,"onUpdate:modelValue":a[3]||(a[3]=e=>r.value.sell_price=e),type:"number",step:"0.01",label:"Precio",prefix:"$"},null,8,["modelValue"]),(0,l.Wm)(o,{modelValue:r.value.feature,"onUpdate:modelValue":a[4]||(a[4]=e=>r.value.feature=e),label:"Destacado"},null,8,["modelValue"]),(0,l.Wm)(i,{modelValue:c.value,"onUpdate:modelValue":a[5]||(a[5]=e=>c.value=e),label:"Seleccionar Imagen","use-chips":"",accept:".jpg, image/*"},null,8,["modelValue"])])),_:1}),(0,l.Wm)(s,null,{default:(0,l.w5)((()=>[(0,l.Wm)(d,{color:"primary",icon:"mdi-check",label:"Guardar",type:"submit",class:"full-width"})])),_:1})])),_:1},8,["onSubmit"])])),_:1})}}});var U=t(5269),k=t(2426),C=t(728),D=t(5735),j=t(1052),E=t(9367),H=t(2165);const N=S,F=N;x()(S,"components",{QCard:h.Z,QForm:U.Z,QCardSection:w.Z,QInput:k.Z,QEditor:C.Z,QCheckbox:D.Z,QFile:j.Z,QCardActions:E.Z,QBtn:H.Z});var P=function(e,a,t,l){function n(e){return e instanceof t?e:new t((function(a){a(e)}))}return new(t||(t=Promise))((function(t,o){function i(e){try{d(l.next(e))}catch(a){o(a)}}function u(e){try{d(l["throw"](e))}catch(a){o(a)}}function d(e){e.done?t(e.value):n(e.value).then(i,u)}d((l=l.apply(e,a||[])).next())}))};const $=(0,l._)("div",{class:"text-h6"},"Menu",-1),z={key:0,class:"row q-col-gutter-sm"},I=(0,l.aZ)({setup(e){const a=(0,o.Ey)(o.nF),t=(0,i.iH)([]),u=(0,i.iH)(void 0),d=(0,i.iH)(!1);function r(){u.value=void 0,d.value=!0}function c(){return P(this,void 0,void 0,(function*(){n.j7.loading();try{const e=yield a.list();t.value=e.data}catch(e){n.j7.axiosError(e,["No se pudo cargar los datos"])}n.j7.loading(!1)}))}function s(e){u.value=e,d.value=!0}function m(e){t.value.unshift(e),d.value=!1}function p(e){t.value.splice(e,1)}function v(e){const a=t.value.findIndex((a=>a.id===e.id));t.value[a]=e,d.value=!1}return c(),(e,a)=>{const n=(0,l.up)("q-btn"),o=(0,l.up)("q-card-section"),i=(0,l.up)("q-card"),c=(0,l.up)("q-dialog"),f=(0,l.up)("q-page");return(0,l.wg)(),(0,l.j4)(f,{padding:""},{default:(0,l.w5)((()=>[(0,l.Wm)(i,{class:"no-box-shadow text-grey-9"},{default:(0,l.w5)((()=>[(0,l.Wm)(o,{class:"q-gutter-y-sm"},{default:(0,l.w5)((()=>[$,(0,l.Wm)(n,{color:"positive",icon:"mdi-plus",label:"Nuevo Plato",onClick:r}),t.value.length?((0,l.wg)(),(0,l.iD)("div",z,[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(t.value,((e,a)=>((0,l.wg)(),(0,l.iD)("div",{class:"col-xs-12 col-sm-6 col-md-4 col-lg-3",key:`dish-${e.id}-${a}`},[(0,l.Wm)(Z,{style:{"max-width":"25rem"},dish:e,onDishEdit:s,onDishRemove:e=>p(a)},null,8,["dish","onDishRemove"])])))),128))])):(0,l.kq)("",!0)])),_:1})])),_:1}),(0,l.Wm)(c,{modelValue:d.value,"onUpdate:modelValue":a[0]||(a[0]=e=>d.value=e)},{default:(0,l.w5)((()=>{var e;return[((0,l.wg)(),(0,l.j4)(F,{style:{"min-width":"25rem"},dish:u.value,key:`popup-${null===(e=u.value)||void 0===e?void 0:e.id}`,onDishCreated:m,onDishUpdated:v},null,8,["dish"]))]})),_:1},8,["modelValue"])])),_:1})}}});var B=t(4379),M=t(6778);const K=I,L=K;x()(I,"components",{QPage:B.Z,QCard:h.Z,QCardSection:w.Z,QBtn:H.Z,QDialog:M.Z})}}]);