
// 1026
//   Definition for a binary tree node.
  function TreeNode(val, left, right) {
      this.val = (val===undefined ? 0 : val)
      this.left = (left===undefined ? null : left)
      this.right = (right===undefined ? null : right)
 }
 
/**
 * @param {TreeNode} root
 * @return {number}
 */
var maxAncestorDiff = function(root) {
    const m = [0];
        dfs(root, m);
        return m[0];
};
function dfs(root,m)
{
    if(!root)
    {
        return [Infinity,-Infinity]
    }
    const left=dfs(root.left,m)
    const right=dfs(root.right,m)
    const minVal = Math.min(root.val, Math.min(left[0], right[0]));
        const maxVal = Math.max(root.val, Math.max(left[1], right[1]));

        m[0] = Math.max(m[0], Math.abs(minVal - root.val), Math.abs(maxVal - root.val));

        return [minVal, maxVal];
}