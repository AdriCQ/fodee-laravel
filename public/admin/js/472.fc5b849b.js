"use strict";(self["webpackChunkfodee_admin"]=self["webpackChunkfodee_admin"]||[]).push([[472],{1472:(t,e,o)=>{o.r(e),o.d(e,{default:()=>z});var n=o(3673),s=o(1853),a=o(8924),l=o(1959),i=o(2323),r=o(1768);const c={class:"absolute-bottom-right"},u={class:"absolute-top-left cursor-pointer",style:{padding:"0.2rem"}},d={class:"absolute-top-right cursor-pointer",style:{padding:"0.2rem"}},m={class:"text-h6"},p={class:"text-subtitle2"},g=(0,n.aZ)({props:{dish:null},setup(t){const e=t,{dish:o}=(0,l.BK)(e);return(t,e)=>{const s=(0,n.up)("q-avatar"),a=(0,n.up)("q-img"),g=(0,n.up)("q-card-section"),w=(0,n.up)("q-card");return(0,n.wg)(),(0,n.j4)(w,null,{default:(0,n.w5)((()=>[(0,n.Wm)(a,{src:`${(0,l.SU)(r.baseURL)}/${(0,l.SU)(o).image}`},{default:(0,n.w5)((()=>[(0,n._)("div",c," $"+(0,i.zw)(Number((0,l.SU)(o).sell_price).toFixed(2)),1),(0,n._)("div",u,[(0,n.Wm)(s,{size:"md","text-color":""+((0,l.SU)(o).feature?"yellow":"grey"),icon:"mdi-star"},null,8,["text-color"])]),(0,n._)("div",d,[(0,n.Wm)(s,{size:"md",icon:"mdi-pencil","text-color":"primary"})])])),_:1},8,["src"]),(0,n.Wm)(g,null,{default:(0,n.w5)((()=>[(0,n._)("div",m,(0,i.zw)((0,l.SU)(o).name),1),(0,n._)("div",p,(0,i.zw)((0,l.SU)(o).category),1)])),_:1}),(0,n.Wm)(g,null,{default:(0,n.w5)((()=>[(0,n.Uk)((0,i.zw)((0,l.SU)(o).description),1)])),_:1})])),_:1})}}});var w=o(151),f=o(4027),v=o(5096),h=o(5589),y=o(7518),_=o.n(y);const x=g,b=x;_()(g,"components",{QCard:w.Z,QImg:f.Z,QAvatar:v.Z,QCardSection:h.Z});var q=function(t,e,o,n){function s(t){return t instanceof o?t:new o((function(e){e(t)}))}return new(o||(o=Promise))((function(o,a){function l(t){try{r(n.next(t))}catch(e){a(e)}}function i(t){try{r(n["throw"](t))}catch(e){a(e)}}function r(t){t.done?o(t.value):s(t.value).then(l,i)}r((n=n.apply(t,e||[])).next())}))};const Z=(0,n._)("div",{class:"text-h6"},"Menu",-1),S={key:0,class:"row q-col-gutter-sm"},U=(0,n.aZ)({setup(t){const e=(0,a.Ey)(a.nF),o=(0,l.iH)([]);function i(){return q(this,void 0,void 0,(function*(){s.j7.loading();try{const t=yield e.list();o.value=t.data,console.log("List dishes",t.data)}catch(t){s.j7.axiosError(t,["No se pudo cargar los datos"])}s.j7.loading(!1)}))}return i(),(t,e)=>{const s=(0,n.up)("q-btn"),a=(0,n.up)("q-card-section"),l=(0,n.up)("q-card"),i=(0,n.up)("q-page");return(0,n.wg)(),(0,n.j4)(i,{padding:""},{default:(0,n.w5)((()=>[(0,n.Wm)(l,{class:"no-box-shadow text-grey-9"},{default:(0,n.w5)((()=>[(0,n.Wm)(a,{class:"q-gutter-y-sm"},{default:(0,n.w5)((()=>[Z,(0,n.Wm)(s,{color:"positive",icon:"mdi-plus",label:"Nuevo Plato"}),o.value.length?((0,n.wg)(),(0,n.iD)("div",S,[((0,n.wg)(!0),(0,n.iD)(n.HY,null,(0,n.Ko)(o.value,((t,e)=>((0,n.wg)(),(0,n.iD)("div",{class:"col-xs-12 col-sm-6 col-md-4 col-lg-3",key:`dish-${t.id}-${e}`},[(0,n.Wm)(b,{style:{"max-width":"25rem"},dish:t},null,8,["dish"])])))),128))])):(0,n.kq)("",!0)])),_:1})])),_:1})])),_:1})}}});var W=o(4379),k=o(8240);const Q=U,z=Q;_()(U,"components",{QPage:W.Z,QCard:w.Z,QCardSection:h.Z,QBtn:k.Z})}}]);