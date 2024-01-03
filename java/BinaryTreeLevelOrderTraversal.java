// package java;

import java.util.*;
import java.util.Queue;


//   Definition for a binary tree node.
  class TreeNode {
      int val;
      TreeNode left;
      TreeNode right;
      TreeNode() {}
      TreeNode(int val) { this.val = val; }
      TreeNode(int val, TreeNode left, TreeNode right) {
          this.val = val;
          this.left = left;
          this.right = right;
      }
  }
 
class BinaryTreeLevelOrderTraversal {
    public List<List<Integer>> levelOrder(TreeNode root) {
       Queue<TreeNode>queue=new LinkedList<TreeNode>();
       List<List<Integer>> ans=new LinkedList<>();
       if(root == null) return ans;
       queue.offer(root);
       while(!queue.isEmpty())
       {
           int num=queue.size();
           List<Integer>subans=new LinkedList<>();
           for(int i=0;i<num;i++)
           {
           if(queue.peek().left !=null)
           {
               queue.offer(queue.peek().left);
           }
           if(queue.peek().right != null)
           {
               queue.offer(queue.peek().right);
           }
           subans.add(queue.poll().val);
           }
           ans.add(subans);
       } 
       return ans;
    }
}
