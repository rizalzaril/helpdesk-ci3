// import { database } from "./firebase-config.js"; // Correct import

// export function loadNotifications() {
// 	const notifRef = ref(database, "notifications");
// 	const notifList = document.getElementById("notif-list");

// 	if (!notifList) return;

// 	onValue(notifRef, (snapshot) => {
// 		notifList.innerHTML = ""; // Clear the list first
// 		snapshot.forEach((childSnapshot) => {
// 			const notif = childSnapshot.val();
// 			const notifItem = document.createElement("li");
// 			notifItem.innerHTML = `<strong>${notif.title}</strong>: ${notif.message} <br> <small>${notif.time}</small>`;
// 			notifList.appendChild(notifItem);
// 		});
// 	});
// }
